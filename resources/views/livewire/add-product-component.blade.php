<div class="">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="card-body">
                <h4 class="card-title">{{ $isEditMode ? 'Edit Product' : 'Add Product' }}</h4>
                <form class="forms-sample" wire:submit.prevent="{{ $isEditMode ? 'updateProduct' : 'saveProduct' }}"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Product title</label>
                        <input type="text" class="form-control" id="title" placeholder="title" wire:model="title"
                            required>
                        @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-select" id="category_id" wire:model="category_id" required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="6" wire:model="description"
                            required></textarea>
                        @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="price" wire:model="price"
                            required>
                        @error('price') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" wire:model="image" {{ $isEditMode ? '' : 'required' }}>
                        @error('image') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">{{ $isEditMode ? 'Update' : 'Submit' }}</button>
                    @if($isEditMode)
                        <button type="button" class="btn btn-secondary" wire:click="resetForm">Cancel</button>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- List of Products -->
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Products</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="text-blue-600 font-semibold">{{ $product->title }}</td>
                                    <td>{{ $product->category->name ?? 'No Category' }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ Str::limit($product->description, 50) }}</td>
                                    <td>
                                        @if ($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm"
                                            wire:click="editProduct({{ $product->id }})">Edit</button>
                                        <button class="btn btn-danger btn-sm" wire:click="deleteProduct({{ $product->id }})"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>