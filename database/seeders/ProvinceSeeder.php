<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Province;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        DB::table('provinces')->delete();
        $json = File::get("database/data/provinces.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Province::create(array(
                'id' => $obj->IDPROVINCIA,
                'name' => $obj->NOMBREPROVINCIA,
                'department_id' => $obj->IDDEPARTAMENTO,
            ));
        }
    }
}
