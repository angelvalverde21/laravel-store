<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use App\Models\Image;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\File;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        // $subcategories = [


        //     [
        //         'category_id' => 1,
        //         'name' => 'Celulares y smartphone',
        //         'slug' => Str::slug('Celulares y smartphone'),
        //     ],

        //     [
        //         'category_id' => 1,
        //         'name' => 'Accesorios para celulares',
        //         'slug' => Str::slug('Accesorios para celulares'),
        //     ],

        //     [
        //         'category_id' => 1,
        //         'name' => 'Smartwatches',
        //         'slug' => Str::slug('Smartwatches'),
        //     ],


        //     /* Tv, Audio y video */
        //     [
        //         'category_id' => 2,
        //         'name' => 'Tv y Audio',
        //         'slug' => Str::slug('Tv y Audio'),
        //     ],

        //     [
        //         'category_id' => 2,
        //         'name' => 'Audios',
        //         'slug' => Str::slug('Audios'),
        //     ],

        //     [
        //         'category_id' => 2,
        //         'name' => 'Audio para autos',
        //         'slug' => Str::slug('Audio para autos'),
        //     ],

        //     /* Consola y videojuegos */

        //     [
        //         'category_id' => 3,
        //         'name' => 'Xbox',
        //         'slug' => Str::slug('Xbox'),
        //     ],  

        //     [
        //         'category_id' => 3,
        //         'name' => 'Play Station',
        //         'slug' => Str::slug('Play Station'),
        //     ],  

            
        //     [
        //         'category_id' => 3,
        //         'name' => 'Video juegos para PC',
        //         'slug' => Str::slug('Video juegos para PC'),
        //     ],  

            
        //     [
        //         'category_id' => 3,
        //         'name' => 'Nintendo',
        //         'slug' => Str::slug('Nintendo'),
        //     ],  

        //     /* Computacion */

                        
        //     [
        //         'category_id' => 4,
        //         'name' => 'Portatiles',
        //         'slug' => Str::slug('Portatiles'),
        //     ],  

        //     [
        //         'category_id' => 4,
        //         'name' => 'Pc escritorio',
        //         'slug' => Str::slug('Pc escritorio'),
        //     ],  


        //     [
        //         'category_id' => 4,
        //         'name' => 'Almacenamiento',
        //         'slug' => Str::slug('Almacenamiento'),
        //     ],  

        //     [
        //         'category_id' => 4,
        //         'name' => 'Accesorios para computadoras',
        //         'slug' => Str::slug('Accesorios para computadoras'),
        //     ],  


        //     /* moda  */

        //     [
        //         'category_id' => 5,
        //         'name' => 'Mujeres',
        //         'slug' => Str::slug('Mujeres'),
        //     ],  

        //     [
        //         'category_id' => 5,
        //         'name' => 'Hombres',
        //         'slug' => Str::slug('Hombres'),
        //     ],

        //     [
        //         'category_id' => 5,
        //         'name' => 'Lentes',
        //         'slug' => Str::slug('Lentes'),
        //     ],

        //     [
        //         'category_id' => 5,
        //         'name' => 'Relojes',
        //         'slug' => Str::slug('Relojes'),
        //     ],

        // ];

        // foreach($subcategories as $subcategory){
        //     Subcategory::factory(1)->create($subcategory);
        // }


        $this->faker = Faker::create();

        //DB::table('categories')->delete();
        $json = File::get("database/data/subcategories.json");
        
        $data = json_decode($json);

        foreach($data as $obj) {

            Subcategory::create(

                [
                    'id' => $obj->id,
                    'name' => $obj->name,
                    'category_id' => $obj->category_id,
                    'has_color' => $obj->has_color,
                    'has_size' => $obj->has_size,
                    'slug' => Str::slug($obj->name)
                ]

            );

            Image::factory(1)->create([
                'url' => 'subcategories/' . $this->faker->image('public/storage/subcategories',640,480,null,false),
                'imageable_type' => Subcategory::class,
                'imageable_id' => $obj->id
            ]);

        }

    }
}
