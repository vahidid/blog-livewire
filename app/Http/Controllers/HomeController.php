<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $selectedCategoryId = 0;
    protected $posts = [];
    protected $post;

    public function index()
    {
        $this->posts = Post::query()
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        return view('index', [
            'selectedCategoryId' => $this->selectedCategoryId,
            'posts' => $this->posts,
            'post' => $this->post
        ]);
    }

    public function selectCategory(Category $category)
    {
        $this->selectedCategoryId = $category->id;
        $this->posts = $category->posts;
        return view('index', [
            'selectedCategoryId' => $this->selectedCategoryId,
            'posts' => $this->posts,
            'post' => $this->post
        ]);
    }
}
