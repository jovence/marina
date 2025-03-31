<div class="container mt-4">
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">My Orders</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                            <tr>
                                <td>#{{ $order->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        {{-- <img src="{{ asset('storage/' . $order->products->image) }}" 
                                             alt="{{ $order->product->title }}" 
                                             class="rounded me-2" 
                                             style="width: 50px; height: 50px; object-fit: cover;"> --}}
                                        {{ $order->product->title }}
                                    </div>
                                </td>
                                <td>{{ number_format($order->product->price, 2) }} FCFA</td>
                                <td>
                                    <span class="badge bg-{{ 
                                        $order->status === 'pending' ? 'warning' : 
                                        ($order->status === 'approved' ? 'success' : 
                                        ($order->status === 'cancelled' ? 'danger' : 'secondary')) 
                                    }}">
                                        {{ ucfirst($order->status) }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">
                                    <div class="d-flex flex-column align-items-center">
                                        <i class="bi bi-bag-x fs-1 text-muted mb-2"></i>
                                        <p class="mb-0">No orders found</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $orders->links() }}
    </div>
</div>
