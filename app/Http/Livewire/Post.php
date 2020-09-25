<?php

namespace App\Http\Livewire;

use Illuminate\Session\SessionManager;
use Livewire\Component;

class Post extends Component
{
    public $post;

    /*public function updateContent($id)
    {
        dd($id);
    }*/

    public function render()
    {
        return view('livewire.post', [
            'post' => $this->post
        ]);
    }
}
