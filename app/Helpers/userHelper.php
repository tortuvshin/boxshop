<?php

namespace app\Helpers;

class userHelper
{
    private $preferences = [];

    public function __construct()
    {
        $this->preferences = [
            'product_viewed'     => [],     //Click on products
            'product_purchased'  => [],  //Checkout action
            'product_shared'     => [],     //Click on share a product
            'product_categories' => [], //keep products categories recorded
            'my_searches'        => [],         //products tags related with users searches
        ];
        //die(json_encode($this->preferences));
    }

    private function added($needle, $array, &$pos)
    {
        if (count($array) > 0) {
            for ($i = 0; $i < count($array); $i++) {
                if (isset($array[$i])) {
                    foreach ($array[$i] as $value) {
                        if ($needle == $value) {
                            $pos = $i;

                            return false;
                        }
                    }
                }
            }
        }

        return true;
    }

    public function preferencesToJson($users_preferences, $index = '', $tags = [], $categories = null)
    {
        $users_preferences = $this->preferencesToArray($users_preferences); //building json array
        //dd($users_preferences);
        if (count($tags) > 0 && $index != '') {
            for ($i = 0; $i < count($tags); $i++) {
                $pos = 0;
                if (trim($tags[$i]) != '' && array_key_exists($index, $this->preferences)) {
                    if ($this->added($tags[$i], $users_preferences[$index], $pos)) {
                        $users_preferences[$index][$i]['tag'] = $tags[$i];
                        $users_preferences[$index][$i]['updated_at'] = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
                    } else {
                        $users_preferences[$index][$pos]['updated_at'] = \Carbon\Carbon::now()->format('Y-m-d H:i:s');
                    }
                }
            }
        }
        $this->saveTagsCategories($categories, $users_preferences['product_categories']);

        return json_encode($users_preferences);
    }

    private function saveTagsCategories($categories, &$users_categories)
    {
        $categories->each(function ($cate) use (&$users_categories) {
            if (!in_array($cate->category_id, $users_categories)) {
                array_push($users_categories, $cate->category_id);
            }
        });
    }

    public function preferencesToArray($users_preferences)
    {
        if (trim($users_preferences) == '') {
            return $this->preferences;
        } else {
            $array = json_decode($users_preferences, true);

            return ($array == null) ? $this->preferences : $array;
        }
    }

    public function getPreferencesNeedle($preferences, $preferences_key)
    {
        $needle = [
            'tags' => [],
            'date' => [],
        ];

        $preferences = $this->preferencesToArray($preferences);
        $preferences_key = trim($preferences_key) != '' ? $preferences_key : 'all';

        switch ($preferences_key) {

            //open suggestions
            case 'all':
                if (count($preferences) > 0) {
                    foreach ($preferences as $key => $value) {
                        foreach ($value as $val) {
                            if (!empty($val['tag']) && trim($val['tag']) != '') {
                                $needle['tags'][] = $val['tag'];
                                $needle['date'][] = $val['updated_at'];
                            }
                        }
                    }
                }
            break;

            //categories suggestions
            case 'product_categories':
                if (count($preferences['product_categories'] > 0)) {
                    foreach ($preferences['product_categories'] as $value) {
                        if (trim($value) != '') {
                            $needle['tags'][] = $value;
                        }
                    }
                }
            break;

            //product_viewed, product_purchased, product_shared, and my_searches suggestions
            default:
                if (isset($preferences[$preferences_key]) && count($preferences[$preferences_key]) > 0) {
                    foreach ($preferences[$preferences_key] as $value) {
                        if (trim($value['tag']) != '') {
                            $needle['tags'][] = $value['tag'];
                            $needle['date'][] = $value['updated_at'];
                        }
                    }
                }
            break;
        }

        return $needle;
    }
}
