<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Storage::deleteDirectory('public/categories');
        Storage::deleteDirectory('public/subcategories');
        Storage::deleteDirectory('public/products');
        Storage::deleteDirectory('public/photografies');

        Storage::makeDirectory('public/categories');
        Storage::makeDirectory('public/subcategories');
        Storage::makeDirectory('public/products');
        Storage::makeDirectory('public/photografies');
        
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        
        $this->call(CategorySeeder::class);

        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(PhotographySeeder::class);
    }
}
