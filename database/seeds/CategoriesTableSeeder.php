<?php

use App\Category as Category;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $temptype = $faker->randomElement(['group', 'store']);
        $icons = ['fui-info-circle', 'fui-alert-circle',
                'fui-question-circle', 'fui-check-circle',
                'fui-cross-circle', 'fui-plus-circle',
                'fui-window', 'fui-windows',
                'fui-upload', 'fui-arrow-right',
                'fui-arrow-left', 'fui-loop',
                'fui-cmd', 'fui-mic',
                'fui-export', 'fui-heart',
                'fui-location', 'fui-plus',
                'fui-check', 'fui-cross',
                'fui-list', 'fui-new',
                'fui-video', 'fui-photo',
                'fui-time', 'fui-eye',
                'fui-chat', 'fui-home',
                'fui-search', 'fui-user', 'fui-mail', ];
        $categorias = ['Арьс арчилгаа'        => ['Нүүр цэвэрлэгч', 'Гуужуулагч', 'Нарын тос', 'Маск', 'Цайруулагч', 'Зовхины тос'],
                    'Нүүр будалт'           => ['Уруулын будаг', 'Хумсны будаг', 'Нүдний тен', 'Нүдний контур', 'Өө дарагч', 'Суурь BB'],
                    'Үс бие арчилгаа'     => ['Үс арчилгаа', 'Бие арчилгаа', 'Гар болон хөлний арчилгаа', 'Амны хөндийн арчилгаа',
                                                'Үс бие арчилгааны хэрэгсэл', ],
                    'Үнэртэй ус' => ['Эрэгтэй ус', 'Эмэгтэй ус', 'Үнэр дарагч', ],
                    'Эрүүл мэнд'   => ['Эм бэлдмэл', 'Тураах бүтээгдэхүүн', ],
                    'Дижитал бараа' => ['Гоо сайхан', 'Эрүүл мэнд', 'Массаж', 'Бусад', ],
                    'Багц'       => ['Арьс арчилгаа', 'Бие арчилгаа', 'Нүүр будалт', 'Бусад хэрэгсэл', ];

        
    }
}
