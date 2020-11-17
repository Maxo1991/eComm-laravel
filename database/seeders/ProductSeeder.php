<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Huawei Honor 40',
                'price' => '800e',
                'category' => 'mobile',
                'description' => 'My new mobile',
                'gallery' => 'https://img.gkbcdn.com/s3/p/2019-12-05/HUAWEI-Honor-V30-5G-Dual-Mode-Smartphone-6GB-128GB-Lcelandic-Frost-891147-.jpg'
            ],
            [
                'name' => 'Nokia 3310',
                'price' => '20e',
                'category' => 'mobile',
                'description' => 'The oldest mobile',
                'gallery' => 'https://lh3.googleusercontent.com/proxy/kLJNT9mWf6x5-hrOnol36Eai5XYwDuyISplaLwZQ-PCWEyTeLuLC20PbB_iwcOoy7sZNilO7xhjlLvyPd921tfTGgCxx5ixGSiUaEKL9HQBdQuQgHo4RKpSpa0YHmJcyutUzQFW9iA'
            ],
            [
                'name' => 'Lg TV',
                'price' => '250e',
                'category' => 'tv',
                'description' => 'Full hd screen',
                'gallery' => 'https://www.lg.com/rs/images/televizori/md05953817/gallery/medium02.jpg'
            ],
            [
                'name' => 'Beco A435',
                'price' => '30e',
                'category' => 'fridge',
                'description' => 'The best fridge in Tehnomanija',
                'gallery' => 'https://www.tehnomanija.rs/UserFiles/products/139748.jpg'
            ]
        ]);
    }
}
