<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([[
            "gallery"=>"http://www.bms.co.in/wp-content/uploads/2014/09/coffee-day-20.png"
        ],
        [
            "gallery"=>"https://www.superiorwallpapers.com/download/hot-chocolate-drink-with-marshmallows-hd-delicious-drink-1920x1200.jpg"
        ],
        [
            "gallery"=>"https://i.pinimg.com/originals/09/b9/6f/09b96f210cc52f4836c86c15c58d7ae6.jpg"
        ],
        ]);
    }
}

