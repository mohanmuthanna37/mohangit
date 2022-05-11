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
        //
        DB::table('products')->insert([
            [
                'name'=>'Espresso',
                "price"=>"107",
                "description"=>"30ml Coffee in a 90ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/espresso-shot.jpg"
            ],
            [
                'name'=>'Doppio',
                "price"=>"127",
                "description"=>"60ml Espresso in a 90ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/Doppio.jpg"
            ],
            [
                'name'=>'Macchiato',
                "price"=>"99",
                "description"=>"30ml Espresso + Foamed milk on top in a 90ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/espresso_macchiato.jpg"
            ],
            [
                'name'=>'Macchiato',
                "price"=>"99",
                "description"=>"30ml Espresso + Foamed milk on top in a 90ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/espresso_macchiato.jpg"
            ],
            [
                'name'=>'Cappuccino',
                "price"=>"137",
                "description"=>"60ml Espresso + 60ml steamed milk + 60ml foamed milk (in that order) in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/CAPPUCCINO-COFFEE.jpg"
            ],
            [
                'name'=>'Flat White',
                "price"=>"133",
                "description"=>"60ml Espresso + 120ml steamed milk in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/img_0470.jpg"
            ],
            [
                'name'=>'Café au Lait',
                "price"=>"175",
                "description"=>"90ml French press coffee + 90ml scalded milk in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/56dff3681dc52417458b4736.jpg"
            ],
            [
                'name'=>'Turkish',
                "price"=>"153",
                "description"=>"10g (or 2 tsp.) ground coffee + 180ml sugar water + köpük (foam) (in that order) in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/turkish-coffee.jpg"
            ],
            [
                'name'=>'Irish',
                "price"=>"133",
                "description"=>" 5g (or 1 tsp.) brown sugar + 120ml French press coffee + 60ml Irish whiskey + 75ml heavy cream (in that order) in a 250ml glass.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/Old-Fashioned-Irish-Coffee.jpg"
            ],
            [
                'name'=>'Americano',
                "price"=>"157",
                "description"=>"60ml Espresso + 120ml hot water in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/americano.jpg"
            ],
            [
                'name'=>'Long Black',
                "price"=>"120",
                "description"=>"120ml hot water + 60ml Espresso (yes, in that order) in a 200ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/Long-Black.jpg"
            ],
            [
                'name'=>'Vienna Mocha',
                "price"=>"135",
                "description"=>" 60ml Espresso + Whipped cream on the top in a 150ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/1519e954ae6bd629544356cae3e51766_XL.jpg"
            ],
            [
                'name'=>'Latte',
                "price"=>"136",
                "description"=>"10g (or 2 tsp.) instant coffee + 15ml sugar water + 90ml cold water with 3-5 ice cubes + 90ml coffee foam (in that order) in a 250ml glass.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/Cafefrappe.jpg"
            ],
            [
                'name'=>'Frappé',
                "price"=>"199",
                "description"=>" 5g (or 1 tsp.) brown sugar + 120ml French press coffee + 60ml Irish whiskey + 75ml heavy cream (in that order) in a 250ml glass.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/Old-Fashioned-Irish-Coffee.jpg"
            ],
            [
                'name'=>'Mocha',
                "price"=>"111",
                "description"=>"60ml Espresso + 120ml hot chocolate + Whipped cream on the top in a 250ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/tumblr_o1osnbtOHH1v64edwo1_1280.jpg"
            ],
            [
                'name'=>'Borgia',
                "price"=>"187",
                "description"=>"60ml Espresso + 120ml hot chocolate + Whipped cream on the top, sprinkled with cinnamon and orange peel in a 250ml cup.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/o.jpg"
            ],
            [
                'name'=>'Mazagran',
                "price"=>"183",
                "description"=>"5g (or 1 tsp.) brown sugar + 90ml French press coffee + 45ml lemon juice + Topped with ice cubes (in that order) in a 250ml glass.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/mazagran-812x1024.jpg"
            ],
            [
                'name'=>'Café del Tiempo',
                "price"=>"165",
                "description"=>"30ml Espresso in a 150ml cup + Side serving of lemon slice and ice cubes.",
                "category"=>"Brewed Drink",
                "gallery"=>"https://www.storypick.com/wp-content/uploads/2016/03/IMG_5035.jpg"
            ],
        ]);
    }
}
