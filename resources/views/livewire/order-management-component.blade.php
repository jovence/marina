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
                                        <h4 class="card-title card-title-dash">List of orders</h4>
                                        
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
                                               
                                                <th>Order ID</th>

                                                <th>Product</th>

                                                <th>User</th>

                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $orders = \App\Models\Order::all(); // Fetch doctors directly in the view
                                            @endphp
                                            @foreach ($orders as $order)
                                                <tr>
                                                   

                                                    <td>
                                                        <h6>{{ $order->id }} </h6>
                                                    </td>
                                                    <td>
                                                        <h6>{{ $order->product->title }}</h6>
                                                    </td>
                                                    
                                                    <td>
                                                        <h6>{{ $order->user->name }}</h6>
                                                    </td>
                                                    <td>
                                                        <h6>{{ $order->status }} </h6>
                                                    </td>
                                                    <td>
                                                        <button wire:click="approveOrder({{ $order->id }})"
                                                            class="btn btn-primary btn-sm" type="button"
                                                            data-bs-target="#editMemberModal">approved
                                                        </button>
                                                        <button class="btn btn-danger btn-sm" type="button"
                                                            wire:click="cancelOrder({{ $order->id }})" <i
                                                            class="mdi mdi-delete"></i>cancelled
                                                        </button>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Reset form when modal is closed
        document.getElementById('addMemberModal').addEventListener('hidden.bs.modal', function() {
            document.getElementById('addMemberForm').reset();
        });
    });
</script>
