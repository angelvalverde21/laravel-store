<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //protected $faker;



    public function run()
    {
        //

        $i=0;

        $this->faker = Faker::create();

        //DB::table('products')->delete();
        $json = File::get("database/data/products.json");
        $data = json_decode($json);

        foreach ($data as $obj) {

            $i = $i+1;

            Product::create(

                array(
                    'id' => $obj->IDPRODUCTO,
                    'title' => $obj->TITULO,
                    'name' => $obj->TITULO,
                    'quantity' => '1',
                    'slug' => Str::slug($obj->TITULO),
                    'description' => $obj->DESCRIPCION,
                    'status' => '1',
                    'subcategory_id' => '1',
                    'excerpt' => $obj->EXCERPT,
                    'created_at' => $obj->FECHA,
                    'updated_at' => $obj->ACTUALIZAR
                )

            );


            for($j=1;$j<=5;$j++){
                Image::create([
                    'url' => 'products/' . $this->faker->image('public/storage/products',640,480,null,false),
                    'imageable_id' => $obj->IDPRODUCTO,
                    'imageable_type' => Product::class
                ]);
            }

            if($i==10){
                break;
            }

        }
    }
}
