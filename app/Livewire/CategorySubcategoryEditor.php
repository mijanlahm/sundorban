<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class CategorySubcategoryEditor extends Component
{

    public $categories = [];
    public $subcategories = [];
    public $selectedCategory = null;
    public $selectedSubcategory = null;

    public function mount($selectedCategoryId = null, $selectedSubcategoryId = null)
    {
        $this->categories = Category::all();

        if ($selectedCategoryId) {
            $this->selectedCategory = $selectedCategoryId;
            $this->subcategories = SubCategory::where('category_id', $selectedCategoryId)->get();
        }

        $this->selectedSubcategory = $selectedSubcategoryId;
    }

    public function updatedSelectedCategory($categoryId)
    {
        $this->subcategories = SubCategory::where('category_id', $categoryId)->get();
        $this->selectedSubcategory = null; // Reset subcategory
    }

    public function render()
    {
        return view('livewire.category-subcategory-editor');
    }
}
