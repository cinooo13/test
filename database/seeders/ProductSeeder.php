<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;

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

                'name'=>"Product 1",
                'prix'=>"100",
                'category'=>"Category 1",
                'description'=>"Description 1", 
                'gallery'=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png",
             
            ],
            [

                'name'=>"Product 2",
                'prix'=>"200",
                'category'=>"Category 2",
                'description'=>"Description 2", 
                'gallery'=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg",
                 
            ],
            [

                'name'=>"Product 3",
                'prix'=>"300",
                'category'=>"Category 3",
                'description'=>"Description 3", 
                'gallery'=>"https://www.canstockphoto.fr/image-vide-16498147.html",
                 
            ],
            [

                'name'=>"Product 4",
                'prix'=>"400",
                'category'=>"Category 4",
                'description'=>"Description 4", 
                'gallery'=>"https://www.canstockphoto.fr/image-vide-16498147.html",
                 
            ],

    
        ]); 
    }
}
