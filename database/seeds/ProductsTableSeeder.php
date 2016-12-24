<?php

use App\Business as Business;
use App\Product as Product;
use App\ProductOffer as ProductOffer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    public function run () {
        $this->bella();
    }

    public function bella()
    {
        $faker = Faker::create();
        $businesses = Business::get();
        $numCategories = DB::table('categories')->count();
        for ($i = 0; $i < 100; $i++) {
            $price = $faker->numberBetween(1, 99);
            $stock = $faker->numberBetween(20, 50);
            $tag = $faker->randomElement(['16 BRAND DRAW COLOR',
                            'CENTELLA MASK',
                            'FOAM',
                            '16 BRAND FINGERPEN',
                            '16 BRAND FINGERPEN',
                            'PINK TONE UP',
                            '16 BLUR PACT SPF50+PA+++']);
            $id = Product::create([
                'category_id'  => $faker->numberBetween(1, $numCategories),
                'user_id'      => '3',
                'status'       => 1,
                'type'         => 'beaty',
                'sale_counts'  => $faker->randomNumber(9),
                'view_counts'  => $faker->randomNumber(9),
                'name'         => $faker->randomElement(['16 BRAND DRAW COLOR',
                            'DR.VITA',
                            'CENTELLA MASK',
                            '16 BRAND FINGERPEN',
                            'MINK CREAM',
                            'DARK SPOT',
                            'SNOW PACK',
                            'ZOMBIE PACK',
                            'CENTELLA AMPOULE',
                            'MONSTER PACK',
                            'WHITENING CREAM',
                            'МОРЬТОЙ ТОС',
                            'COCOON',
                            'BB FOUNCOVER',
                            'ZOMBIE PACK',
                            'PINK TONE UP',
                            '16 BLUR PACT SPF50+PA+++']),
                'description'  => '',
                'price'        => $price,
                'stock'        => $stock,
                'brand'        => $faker->randomElement(['Skin1004', 'DayCell', 'Ottie', '16 Brand', 'Son Park', 'Clinique']),
                'features'     => json_encode([
                    'images' => [
                    '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
                    '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
                    '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
                    '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
                    '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
                    ],
                ]),
                'condition' => $faker->randomElement(['new', 'refurbished', 'used']),
                'low_stock' => $faker->randomElement([5, 10, 15]),
                'tags'      => json_encode($tag.','.$tag.','.$tag),
            ]);
            if ($faker->numberBetween(0, 1)) {
                $percentage = $faker->randomElement([10, 15, 25, 35, 50]);
                ProductOffer::create([
                    'product_id' => $id->id,
                    'day_start'  => $faker->dateTime(),
                    'day_end'    => $faker->dateTimeBetween('now', '+1 years'),
                    'percentage' => $percentage,
                    'price'      => (($percentage * $price) / 100),
                    'quantity'   => round($stock / 2),
                ]);
            }
        }
    }

    public function market()
    {
        $faker = Faker::create();
        $businesses = Business::get();
        $numCategories = DB::table('categories')->count();
        for ($i = 0; $i < 100; $i++) {
            $price = $faker->numberBetween(1, 99);
            $stock = $faker->numberBetween(20, 50);
            $tag = $faker->randomElement(['Home-Fix Mongolia Хямдрал',
                            'Celio: Special Weekend хямдрал урамшуулал зарлалаа',
                            'Бишрэлт Их Дэлгүүрийн Хар Баасан Гарагийн хямдрал',
                            'DJI Drone BLACK FRIDAY 2016-аар хямдарчээ',
                            'Машины ХАРХАЙРЦАГ хямдрал',
                            'Truvor Mongolia онцгой урамшуулалт худалдаа эхэллээ',
                            'T-Kitchen брэндийн гал тогооны тавилгын захиалга',
                            'Шилмэл буйдангийн хямдралтай худалдаа',
                            'ЭНХ СМАЙЛ шүд эрүү нүүрний эмнэлэг шинэ жилийн хямдрал',
                            'Монголын хүүхэд хөгжлийн ордон цэцэрлэг онцгой урамшуулал зарлаж байна'
                            ]);
            $id = Product::create([
                'category_id'  => $faker->numberBetween(1, $numCategories),
                'user_id'      => '3',
                'status'       => 1,
                'type'         => 'beaty',
                'sale_counts'  => $faker->randomNumber(9),
                'view_counts'  => $faker->randomNumber(9),
                'name'         => $faker->randomElement(['Home-Fix Mongolia Хямдрал',
                            'Celio: Special Weekend хямдрал урамшуулал зарлалаа',
                            'Бишрэлт Их Дэлгүүрийн Хар Баасан Гарагийн хямдрал',
                            'DJI Drone BLACK FRIDAY 2016-аар хямдарчээ',
                            'Машины ХАРХАЙРЦАГ хямдрал',
                            'Truvor Mongolia онцгой урамшуулалт худалдаа эхэллээ',
                            'T-Kitchen брэндийн гал тогооны тавилгын захиалга',
                            'Шилмэл буйдангийн хямдралтай худалдаа',
                            'ЭНХ СМАЙЛ шүд эрүү нүүрний эмнэлэг шинэ жилийн хямдрал',
                            'Монголын хүүхэд хөгжлийн ордон цэцэрлэг онцгой урамшуулал зарлаж байна']),
                'description'  => '',
                'price'        => $price,
                'stock'        => $stock,
                'brand'        => $faker->randomElement(['Celio', 'Dji', 'Ottie', '16 Brand', 'Son Park', 'Clinique']),
                'features'     => json_encode([
                    'images' => [
                    '/img/seed/'.$faker->numberBetween(1, 8).'.jpg',
                    '/img/seed/'.$faker->numberBetween(1, 8).'.jpg',
                    '/img/seed/'.$faker->numberBetween(1, 8).'.jpg',
                    '/img/seed/'.$faker->numberBetween(1, 8).'.jpg',
                    '/img/seed/'.$faker->numberBetween(1, 8).'.jpg',
                    ],
                ]),
                'condition' => $faker->randomElement(['new', 'refurbished', 'used']),
                'low_stock' => $faker->randomElement([5, 10, 15]),
                'tags'      => json_encode($tag.','.$tag.','.$tag),
            ]);
            if ($faker->numberBetween(0, 1)) {
                $percentage = $faker->randomElement([10, 15, 25, 35, 50]);
                ProductOffer::create([
                    'product_id' => $id->id,
                    'day_start'  => $faker->dateTime(),
                    'day_end'    => $faker->dateTimeBetween('now', '+1 years'),
                    'percentage' => $percentage,
                    'price'      => (($percentage * $price) / 100),
                    'quantity'   => round($stock / 2),
                ]);
            }
        }
    }
}
