<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesList extends Component
{
    protected $categories;
    public $selectedCategoryId;

    public function mount(Category $category): void
    {
        $this->categories = Category::query()
            ->orderBy('updated_at', 'desc')
            ->get();
        $this->selectedCategory = $category->id;
    }

    public function render()
    {
        return view('livewire.categories-list', [
            'categories' => $this->categories,
            'selectedCategoryId' => $this->selectedCategoryId
        ]);
    }
}
