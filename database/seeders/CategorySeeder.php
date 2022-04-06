<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Image;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $this->faker = Faker::create();

        //DB::table('categories')->delete();
        $json = File::get("database/data/categories.json");
        
        $data = json_decode($json);

        foreach($data as $obj) {

            Category::create(

                [
                    'id' => $obj->id,
                    'name' => $obj->name,
                    'slug' => Str::slug($obj->name)
                ]

            );

            Image::factory(1)->create([
                'url' => 'categories/' . $this->faker->image('public/storage/categories',640,480,null,false),
                'imageable_type' => Category::class,
                'imageable_id' => $obj->id
            ]);

        }
    }
}
