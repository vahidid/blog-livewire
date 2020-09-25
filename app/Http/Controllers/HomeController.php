<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $selectedCategoryId = 0;
    protected $posts = [];

    public function index()
    {
        return view('index', ['selectedCategoryId' => $this->selectedCategoryId]);
    }

    public function selectCategory(Category $category)
    {
        $this->selectedCategoryId = $category->id;
        $this->posts = $category->posts;
        return view('index', ['selectedCategoryId' => $this->selectedCategoryId, 'posts' => $this->posts]);
    }
}
