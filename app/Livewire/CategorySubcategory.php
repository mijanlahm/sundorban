<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class CategorySubcategory extends Component
{
    public $categories = [];
    public $subcategories = [];
    public $selectedCategory = null;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedSelectedCategory($categoryId)
    {
        $this->subcategories = SubCategory::where('category_id', $categoryId)->get();
    }

    
    public function render()
    {
        return view('livewire.category-subcategory');
    }
}
