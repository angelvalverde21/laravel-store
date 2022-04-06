<?php

namespace App\Http\Livewire\User\Products;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateProduct extends Component
{

    public $categories = [], $subcategories = [];
    public $category_id = "", $subcategory_id = "";
    public $name, $slug, $description, $totalSubcategories;

    protected $rules = [
        'category_id'=>'required',
        'subcategory_id' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:products',
        'description' => 'required',
    ];

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id',$value)->get();
        $this->reset('subcategory_id');
    }

    public function updatedName($value){
        $this->slug = Str::slug($value);
    }

    public function save(){
        $this->validate();

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->description = $this->description;
        $product->subcategory_id = $this->subcategory_id;

        $product->save();

        return redirect()->route('user.products.edit',$product);
    }

    public function mount(){

        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.user.products.create-product')->layout('layouts.user');
    }
}
