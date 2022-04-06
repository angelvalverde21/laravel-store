<?php

namespace App\Http\Livewire\User\Photografies;

use App\Models\Photography;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class ShowPhotos extends Component
{
    public $title;
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    public function render()

    {

        if ($this->search <> "") {
            $posts = Photography::where('title', 'like', '%' . $this->search . '%')
                ->orderBy($this->sort, $this->direction)
                ->get();
        } else {
            //Muestra todos los post
            //$posts = Photography::all();
            //Tambien Muestra todos los post pero filtrado
            $posts = Photography::orderBy($this->sort, $this->direction)->get();
        }


        /*$posts = Photography::where('title','like','%'. $this->search . '%')
                                ->orWhere('created_at','like','%'. $this->search . '%')
                                ->orderBy($this->sort,$this->direction)
                                ->get();*/

        return view('livewire.user.photografies.show-photos', compact('posts'))->layout('layouts.user');
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
