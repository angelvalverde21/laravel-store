<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('departments')->delete();
        $json = File::get("database/data/departments.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
            Department::create(array(
                'id' => $obj->IDDEPARTAMENTO,
                'name' => $obj->NOMBREDEPARTAMENTO,
            ));
        }
    }
}
