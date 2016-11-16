<?php

namespace app\Helpers;

class Utility
{
    public static function thousandSuffix($num)
    {
        if ($num < 999) {
            return $num;
        }
        $x = round($num);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = ['K', 'M', 'B', 'T'];
        $x_count_parts = count($x_array) - 1;
        $x_display = $x_array[0].((int) $x_array[1][0] !== 0 ? '.'.$x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;
    }

    public static function showPrice($arg)
    {
        $options = ['amount' => '', 'discount' => 0, 'thousandSuffix' => 1];
        if (is_array($arg)) {
            $options = $arg + $options;
            if (isset($options['price'])) {
                $options['amount'] = $options['price'];
            }
        } else {
            $options['amount'] = $arg;
        }

        switch (config('app.payment_method')) {

              case 'Points':

                   $points = self::thousandSuffix($options['amount']);
                   if ($options['thousandSuffix']) {
                       $points .= ' <small>'.trans('store.points').'</small>';
                   }

                   return $points;

              default:

                  setlocale(LC_MONETARY, config('app.lc_monetary'));
                  $format = '%i';
                  if ($options['discount']) {
                      $format = str_replace('##', $options['discount'], trans('product.globals.price_after_discount'));
                  }

                  return self::money_format($format, $options['amount']);
          }
    }

    public static function active($route, $active = 'active')
    {
        return parse_url(\Request::url(), PHP_URL_PATH) == $route  ? $active : '';
    }

    public static function showRate($rate)
    {
        $rate_max = 5;

        for ($i = 1; $i <= $rate_max; $i++) {
            if ($i <= $rate) {
                echo '<span class = "glyphicon glyphicon-heart"></span>';
            } else {
                echo '<span class = "glyphicon glyphicon-remove"></span>';
            }
        }
    }

    public static function codeMasked($code, $lenght = 5, $char = '0')
    {
        $mask = '';
        for ($i = strlen($code); $i < $lenght; $i++) {
            $mask .= $char;
        }

        return $mask.$code;
    }

    public static function totalOrder($items)
    {
        $data = [
          'qty'   => 0,
          'total' => 0,
        ];

        $items->each(function ($item, $key) use (&$data) {
            $data['qty'] += $item->quantity;
            $data['total'] += $item->price;
        });

        return $data;
    }

    public static function totalByStatusOrder($orders)
    {
        $summary = [
            'open'      => ['qty' => 0, 'total' => 0],
            'pending'   => ['qty' => 0, 'total' => 0],
            'sent'      => ['qty' => 0, 'total' => 0],
            'closed'    => ['qty' => 0, 'total' => 0],
            'cancelled' => ['qty' => 0, 'total' => 0],
        ];

        $orders->each(function ($order, $key) use (&$summary) {
            $total = self::totalOrder($order->details);

            switch ($order->status) {
                case 'open':
                  $summary['open']['qty']++;
                  $summary['open']['total'] += $total['total'];
                break;

                case 'pending':
                  $summary['pending']['qty']++;
                  $summary['pending']['total'] += $total['total'];
                break;

                case 'sent':
                  $summary['sent']['qty']++;
                  $summary['sent']['total'] += $total['total'];
                break;

                case 'closed':
                  $summary['closed']['qty']++;
                  $summary['closed']['total'] += $total['total'];
                break;

                case 'cancelled':
                  $summary['cancelled']['qty']++;
                  $summary['cancelled']['total'] += $total['total'];
                break;
            }
        });

        return $summary;
    }

    /**
     * emulate money format if the function is not defined in the O.S.
     */
    public static function money_format($format, $number)
    {
        //checking if money_format exists
        if (function_exists('money_format')) {
            return money_format($format, $number);
        }
        //starting emulation
        $regex = '/%((?:[\^!\-]|\+|\(|\=.)*)([0-9]+)?'.
                  '(?:#([0-9]+))?(?:\.([0-9]+))?([in%])/';
        if (setlocale(LC_MONETARY, 0) == 'C') {
            setlocale(LC_MONETARY, '');
        }
        $locale = localeconv();
        preg_match_all($regex, $format, $matches, PREG_SET_ORDER);
        foreach ($matches as $fmatch) {
            $value = floatval($number);
            $flags = [
                'fillchar'  => preg_match('/\=(.)/', $fmatch[1], $match) ?
                               $match[1] : ' ',
                'nogroup'   => preg_match('/\^/', $fmatch[1]) > 0,
                'usesignal' => preg_match('/\+|\(/', $fmatch[1], $match) ?
                               $match[0] : '+',
                'nosimbol'  => preg_match('/\!/', $fmatch[1]) > 0,
                'isleft'    => preg_match('/\-/', $fmatch[1]) > 0,
            ];
            $width = trim($fmatch[2]) ? (int) $fmatch[2] : 0;
            $left = trim($fmatch[3]) ? (int) $fmatch[3] : 0;
            $right = trim($fmatch[4]) ? (int) $fmatch[4] : $locale['int_frac_digits'];
            $conversion = $fmatch[5];

            $positive = true;
            if ($value < 0) {
                $positive = false;
                $value  *= -1;
            }
            $letter = $positive ? 'p' : 'n';

            $prefix = $suffix = $cprefix = $csuffix = $signal = '';

            $signal = $positive ? $locale['positive_sign'] : $locale['negative_sign'];
            switch (true) {
                case $locale["{$letter}_sign_posn"] == 1 && $flags['usesignal'] == '+':
                    $prefix = $signal;
                    break;
                case $locale["{$letter}_sign_posn"] == 2 && $flags['usesignal'] == '+':
                    $suffix = $signal;
                    break;
                case $locale["{$letter}_sign_posn"] == 3 && $flags['usesignal'] == '+':
                    $cprefix = $signal;
                    break;
                case $locale["{$letter}_sign_posn"] == 4 && $flags['usesignal'] == '+':
                    $csuffix = $signal;
                    break;
                case $flags['usesignal'] == '(':
                case $locale["{$letter}_sign_posn"] == 0:
                    $prefix = '(';
                    $suffix = ')';
                    break;
            }
            if (!$flags['nosimbol']) {
                $currency = $cprefix.
                            ($conversion == 'i' ? $locale['int_curr_symbol'] : $locale['currency_symbol']).
                            $csuffix;
            } else {
                $currency = '';
            }
            $space = $locale["{$letter}_sep_by_space"] ? ' ' : '';

            $value = number_format($value, $right, $locale['mon_decimal_point'],
                     $flags['nogroup'] ? '' : $locale['mon_thousands_sep']);
            $value = @explode($locale['mon_decimal_point'], $value);

            $n = strlen($prefix) + strlen($currency) + strlen($value[0]);
            if ($left > 0 && $left > $n) {
                $value[0] = str_repeat($flags['fillchar'], $left - $n).$value[0];
            }
            $value = implode($locale['mon_decimal_point'], $value);
            if ($locale["{$letter}_cs_precedes"]) {
                $value = $prefix.$currency.$space.$value.$suffix;
            } else {
                $value = $prefix.$value.$space.$currency.$suffix;
            }
            if ($width > 0) {
                $value = str_pad($value, $width, $flags['fillchar'], $flags['isleft'] ?
                         STR_PAD_RIGHT : STR_PAD_LEFT);
            }

            $format = str_replace($fmatch[0], $value, $format);
        }

        return $format;
    }

    public static function printBarCode($product = null, $type = 'EAN8')
    {
        if ($product == null || !$product) {
            return trans('globals.barcode_error_msg');
        } else {
            return \DNS1D::getBarcodeSVG(trim($product->bar_code) != '' ? $product->bar_code : $product->id, $type);
        }
    }

    public static function requestToArrayUnique($request)
    {
        $refine = [];
        foreach ($request as $key => $value) {
            $value = urldecode($value);
            if (trim($value) != '') {
                if ($key == 'category') {
                    $aux = explode('|', $value);
                    $refine[$key] = $aux[0];
                    $refine['category_name'] = isset($aux[1]) ? $aux[1] : '';
                } else {
                    $refine[$key] = $value;
                }
            }
        }

        return $refine;
    }

    public static function getUrlQueryString($refine, $key, $value)
    {
        $query = '';
        $passed = false;
        foreach ($refine as $_key => $_value) {
            if ($_key != 'category_name') { //validating no category name in the url
                if ($_key == $key) {
                    $query .= $_key.'='.urlencode($value).'&';
                    $passed = true;
                } else {
                    //if there is a category the category value is built
                    $_value = $_key == 'category' ? $_value.'|'.$refine['category_name'] : $_value;
                    $query .= $_key.'='.urlencode($_value).'&';
                }
            }
        }

        if (!$passed) {
            $query .= $key.'='.urlencode($value).'&';
        }

        return rtrim($query, '&');
    }

    public static function removeFromUrlQueryString($refine, $_key)
    {
        $url = '';
        foreach ($refine as $key => $value) {
            if ($key != $_key && trim($value) != '' && $key != 'category_name') {
                $value = $key == 'category' ? $value.'|'.$refine['category_name'] : $value;
                $url .= $key.'='.urlencode($value).'&';
            }
        }

        return rtrim($url, '&');
    }
}
