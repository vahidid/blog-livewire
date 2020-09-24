<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $selectedCategoryId = 0;

    public function index()
    {
        return view('index', ['selectedCategoryId' => $this->selectedCategoryId]);
    }

    public function selectCategory(Category $category)
    {
        $this->selectedCategoryId = $category->id;
        return view('index', ['selectedCategoryId' => $this->selectedCategoryId]);
    }
}
