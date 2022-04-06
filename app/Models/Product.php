<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    CONST PUBLICADO = 1;
    CONST BORRADOR = 0;

    // public function fotos(){
    //     return $this->hasMany(Photography::class);
    // }

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Uno a muchos inverso
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //Uno a muchos
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //Mucho a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //Uno a muchos inverso
    public function subcategory(){
        return $this->belongsTo(subcategory::class);
    }

    public function images(){
        return $this->morphMany(Image::class,"imageable");
    }
}
