<div>
    <div class="row">
        <div class="col-lg-3">
            <div class="dashstat">
                <i class="fa-solid fa-cart-shopping"></i>
                <div class="dashstat_content">
                    <h3>{{ $totalOrders }}</h3>
                    <p>Total Orders</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="dashstat">
                <i class="fa-solid fa-tag"></i>
                <div class="dashstat_content">
                    <h3>{{ $totalProducts }}</h3>
                    <p>Total Products</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="dashstat">
                <i class="fa-solid fa-list-ul"></i>
                <div class="dashstat_content">
                    <h3>{{ $totalCategories }}</h3>
                    <p>Total Categories</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="dashstat">
                <i class="fa-solid fa-list-ul"></i>
                <div class="dashstat_content">
                    <h3>{{ $numberOfUsers }}</h3>
                    <p>Total number of users</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content tab-content-basic">
        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">

            <div class="row">
                <div class="col-lg-12 d-flex flex-column">

                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-start">
                                        <div>
                                            <h4 class="card-title card-title-dash">List of users</h4>

                                        </div>

                                    </div>
                                    <div class="table-responsive  mt-1">
                                        <table class="table select-table">
                                            <thead>
                                                @if (session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session('message') }}
                                                    </div>
                                                @endif
                                                <tr>

                                                    <th>select</th>
                                                    
                                                    <th>user id</th>

                                                    <th>Name</th>

                                                    <th>Email</th>

                                                    <th>created date</th>
                                          

                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @php
                                                    $orders = \App\Models\Order::all(); // Fetch doctors directly in the view
                                                @endphp --}}
                                                @foreach ($users as $user)
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-flat mt-0">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        aria-checked="false"><i
                                                                        class="input-helper"></i></label>
                                                            </div>


                                                        </td>

                                                        <td>
                                                            <h6>{{ $user->id }} </h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $user->name }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $user->email }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6>{{ $user->created_at }}</h6>
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

            </div>
        </div>
    </div>
</div>
