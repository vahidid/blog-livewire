<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostList extends Component
{
    public $posts;

    public function render()
    {
        return view('livewire.post-list', ['posts' => $this->posts]);
    }
}
