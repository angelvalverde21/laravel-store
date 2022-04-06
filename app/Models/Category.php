<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //Relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //Muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //Uno a muchos a traves de
    public function products(){
        return $this->hasManyThrough(Product::class,Subcategory::class);
    }
}
