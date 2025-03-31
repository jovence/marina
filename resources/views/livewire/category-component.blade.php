<div class="">
    <div class="row">
        <div class="col-md-2 m-1"></div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Categories</h4>
                    <p class="card-description"></p>
                    <form wire:submit.prevent="saveCategory" class="forms-sample">
                        <div class="form-group">
                            <label for="exampleInputUsername1">Category</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="category name" wire:model="name">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Add Categories</button>
                    </form>
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">

                            {{ session('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>

                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-2 m-1"></div>
    </div>
    <div class="row">
        <div class="col-md-2 m-1"></div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List of Categories</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <button class="btn btn-danger btn-sm"
                                                wire:click="deleteCategory({{ $category->id }})"
                                                onclick = "return confirm('are you sure ?')">Delete</button>
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

</div>
