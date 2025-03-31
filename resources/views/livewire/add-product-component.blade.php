<div class="col-12 grid-margin stretch-card">
    <div class="card">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="card-body">
            <h4 class="card-title">Add Product</h4>
            <form class="forms-sample" wire:submit.prevent="saveProduct" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Product title</label>
                    <input type="text" class="form-control" id="title" placeholder="title" wire:model="title" required>
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-select" id="category_id" wire:model="category_id" required>
                        <option value="">Select Category</option> @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea class="form-control" id="description" rows="6" wire:model="description" required></textarea>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" placeholder="price" wire:model="price" required>
                    @error('price') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <input type="file" wire:model="image" required>
                    @error('image') <span class="error">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
            </form>
        </div>
    </div>
</div>