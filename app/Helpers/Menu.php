<?php

namespace app\Helpers;

use App\Order;
use App\Product;

class Menu
{
   
    public static function dashboard($returnArray = false)
    {
        $menu = [
            ['route' => '/user/dashboard', 'text' => trans('user.dashboard'), 'icon' => 'glyphicon glyphicon-dashboard'],
            ['route' => '/user/profile', 'text' => trans('user.profile'), 'icon' => 'glyphicon glyphicon-user'],
            ['route' => '/user/address', 'text' => trans('user.address_book'), 'icon' => 'glyphicon glyphicon-map-marker', 'divider' => 1],
        ];
        //Menu para empresas
        if (\Auth::user()->hasRole(['business', 'admin'])) {
            $products = Product::where('user_id', \Auth::id())->get();
            $productsLowStock = 0;
            foreach ($products as $row) {
                if ($row->stock <= $row->low_stock) {
                    $productsLowStock++;
                }
            }

            $salesOpen = Order::where('seller_id', \Auth::user()->id)
                ->ofType('order')
                ->whereNotIn('status', ['cancelled', 'closed'])
                ->get()
                ->count();

            $menu = array_merge($menu, [
                ['route' => '/products/myProducts', 'text' => trans('user.your_products'), 'icon' => 'glyphicon glyphicon-briefcase', 'cont' => $productsLowStock],
                ['route' => '/orders/usersOrders', 'text' => trans('user.your_sales'), 'icon' => 'glyphicon glyphicon-piggy-bank', 'cont' => $salesOpen],
            ]);
        }

        if (\Auth::user()->hasRole(['person', 'admin'])) {
            $menu[] = ['route' => '/user/orders', 'text' => trans('user.your_orders'), 'icon' => 'glyphicon glyphicon-shopping-cart', 'divider' => 1, 'cont' => 0];
        }

        if (\Auth::user()->isTrusted() && config('app.offering_free_products')) {
            $menu[] = ['route' => '/user/myFreeProducts', 'text' => trans('user.your_free_products'), 'icon' => 'glyphicon glyphicon-star'];
        }

        return $returnArray ? $menu : json_encode($menu);
    }

    public static function top($returnArray = false)
    {
        if (\Auth::guest()) { 
            $menu = [
                ['route' => '/login', 'text' => trans('user.login'), 'divider' => 1],
                ['route' => '/register', 'text' => trans('user.register')],
            ];
        } else {  
            $menu = self::dashboard(true);

            if (\Auth::check() && \Auth::user()->isAdmin()) {
                $menu = array_merge($menu, [
                    ['route' => '/wpanel', 'text' => trans('user.wpanel'), 'icon' => 'glyphicon glyphicon-cog', 'divider' => 1],
                ]);
            }
        }

        return $returnArray ? $menu : json_encode($menu);
    }

    public static function backend($returnArray = false)
    {
        //Menu para empresas
        if (\Auth::user()->hasRole(['business', 'admin'])) {
            $menu = [
                ['route' => '/wpanel',            'text' => trans('user.dashboard'),              'icon' => 'glyphicon glyphicon-dashboard'],
                ['route' => '/wpanel/profile',    'text' => trans('company.store_config'),        'icon' => 'glyphicon glyphicon-cog'],
                ['route' => '/wpanel/categories', 'text' => trans('categories.product_category'), 'icon' => 'glyphicon glyphicon-tasks'],
                ['route' => '/wpanel/features',   'text' => trans('features.product_features'),   'icon' => 'glyphicon glyphicon-th-list'],
            ];
        }

        return $returnArray ? $menu : json_encode($menu);
    }

    public static function help($returnArray = false)
    {
            $menu = [
                // ['route' =>'#',      'text'=> trans('globals.faq'),   ],
                ['route' => '/about', 'text' => trans('company.about_us')],
                ['route' => '/refunds', 'text' => trans('company.refund_policy')],
                ['route' => '/privacy', 'text' => trans('company.privacy_policy')],
                ['route' => '/terms', 'text' => trans('company.terms_of_service'), 'divider' => 1],
                ['route' => '/contact', 'text' => trans('about.contact_us')],
            ];

        return $returnArray ? $menu : json_encode($menu);
    }
}
