<div class="mb-3">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id" wire:model.live="selectedCategory">
        <option value="">Select A Category</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <br>
    
    <label for="category">Sub Category</label>
    <select class="form-control" id="subcategory" name="subcategory_id">
        <option value="">Select A Sub Category</option>

        @foreach ($subCategories as $subCategory)
            <option value="{{ $subCategory->id }}">{{ $subCategory->subcategory_name }}</option>
        @endforeach
    </select>

   
</div>

