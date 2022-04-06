<?php

namespace App\Http\Livewire\User\Products;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class EditProduct extends Component
{

    protected $rules = [
        'category_id'=>'required',
        'product.subcategory_id' => 'required',
        'product.name' => 'required',
        'product.slug' => 'required|unique:products',
        'product.description' => 'required',
    ];

    public $product, $categories, $subcategories;

    public function mount(Product $product){

        $this->product = $product;

        $this->categories = Category::all();

        $this->category_id = $product->subcategory->category->id;

        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();
    }

    public function save(){
        $rules = $this->rules;
        $rules['slug'] = 'required|unique:products,slug,'. $this->product->id;
        $this->product->save();

        $this->emit('guardando');
    }

    public function updatedProductName($value){
        $this->product->slug = Str::slug($value);
    }

    public function updatedCategoryId($value){
        $this->subcategories = Subcategory::where('category_id', $value)->get();
    }

    public function render()
    {
        return view('livewire.user.products.edit-product')->layout('layouts.user');
    }
}
