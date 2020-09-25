<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Content extends Component
{
    public $post;
    protected $listeners = ['updateContent' => 'updateContent'];

    public function updateContent($id)
    {
        $post = \App\Models\Post::find($id);
        $this->post = $post;
    }

    public function render()
    {
        if(!$this->post)
        {
            $this->post = \App\Models\Post::orderBy('created_at', 'desc')->first();
        }
        return view('livewire.content', [
            'post' => $this->post
        ]);
    }
}
