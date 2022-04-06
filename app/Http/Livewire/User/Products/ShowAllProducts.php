<?php

namespace App\Http\Livewire\User\Products;

use App\Models\Product;
use Livewire\Component;

class ShowAllProducts extends Component
{

    //use WithPagination;
 
    // protected $paginationTheme = 'bootstrap';

    public $title;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    // public function paginationView()
    // {
    //     return 'custom-pagination-links-view';
    // }

    public function render()
    {

        if ($this->search <> "") {
            $posts = Product::where('title', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->paginate(10);
        } else {
            //Muestra todos los post
            //$posts = Photography::all();
            //Tambien Muestra todos los post pero filtrado
            $posts = Product::where('status','1')->orderBy($this->sort, $this->direction)
                ->paginate(10);
        }

        /*$posts = Product::where('title','like','%'. $this->search . '%')
                                ->orWhere('created_at','like','%'. $this->search . '%')
                                ->orderBy($this->sort,$this->direction)
                                ->get();*/

        return view('livewire.user.products.show-all-products', compact('posts'))->layout('layouts.user');
    }

    public function order($sort)
    {

        if ($this->sort == $sort) {

            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }

        //$this->sort = "id";
    }
}
