<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name'=>'admin']);
        $role1 = Role::create(['name'=>'revendedor']);
        $role2 = Role::create(['name'=>'cliente']);
        $role3 = Role::create(['name'=>'modelo']);
        $role4 = Role::create(['name'=>'fotografo']);
        $role5 = Role::create(['name'=>'repartidor']);
        $role6 = Role::create(['name'=>'empacador']);
    }
}
