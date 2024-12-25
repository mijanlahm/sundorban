<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;

class CategorySubcategory extends Component
{
    public $categories = [];
    public $selectedCategory;
    public $subCategories = [];

    public function mount(){
        $this->categories = Category::all();
    }

    public function updatedSelectedCategory($categoryId){
        $this->subCategories = SubCategory::where('category_id', $categoryId)->get();
    }
    
    public function render()
    {
        return view('livewire.category-subcategory');
    }
}
