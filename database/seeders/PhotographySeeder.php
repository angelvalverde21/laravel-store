<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Models\Photography;
use Faker\Factory as Faker;


class PhotographySeeder extends Seeder
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

        $sessionesfotograficas = [
            [
                'id' => '1',
                'title' => 'Sesion de fotos en Barranco',
                'district_id' => '150104',
                'fotografo_id' => '2',
                'modelo_id' => '4',
                'product_id' => '1',
                'fecha' => '2022-03-08 15:58:43',
            ],
            [
                'id' => '2',
                'title' => 'Sesion de fotos en san isidro',
                'district_id' => '150131',
                'fotografo_id' => '2',
                'modelo_id' => '3',
                'product_id' => '2',
                'fecha' => '2022-03-09 15:58:43',
            ],
            [

                'id' => '3',
                'title' => 'Sesion de fotos en Paracas',
                'district_id' => '110505',
                'fotografo_id' => '2',
                'modelo_id' => '5',
                'product_id' => '3',
                'fecha' => '2022-03-10 15:58:43',
            ],
            [

                'id' => '4',
                'title' => 'Sesion de fotos en Canta Obrajillo',
                'district_id' => '150401',
                'fotografo_id' => '2',
                'modelo_id' => '3',
                'product_id' => '4',
                'fecha' => '2022-03-10 15:58:43',
            ],
            [

                'id' => '5',
                'title' => 'Sesion de fotos Monumental',
                'district_id' => '70101',
                'fotografo_id' => '2',
                'modelo_id' => '3',
                'product_id' => '4',
                'fecha' => '2022-03-10 15:58:45',
            ],

            [

                'id' => '6',
                'title' => 'Sesion de fotos Monumental',
                'district_id' => '70101',
                'fotografo_id' => '2',
                'modelo_id' => '5',
                'product_id' => '4',
                'fecha' => '2022-03-10 15:58:45',
            ],
        ]; 

        foreach ($sessionesfotograficas as $session) {

            Photography::create($session);

            Image::factory(5)->create(
                [
                    'url' => 'photografies/' . $this->faker->image('public/storage/photografies',640,480,null,false),
                    'imageable_id' => $session['id'],
                    'imageable_type' => Photography::class
                ]
            );

        }
    }
}
