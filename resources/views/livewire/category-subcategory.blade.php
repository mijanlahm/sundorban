<div class="mb-3">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id" wire:model.live="selectedCategory">
        <option value="">-- Select Category --</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>

    <br>
    
    <label for="category">Sub Category</label>
    <select class="form-control" id="subcategory" name="subcategory_id">
        <option value="">-- Select subcategory --</option>

        @foreach ($subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
        @endforeach
    </select>

   
</div>

