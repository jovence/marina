<section class="detail-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="custom-block-image-wrap">
                    <img src="{{ asset('storage/' . $product->image) }}"
                        class="custom-block-image img-fluid rounded shadow-lg" alt="{{ $product->title }}"
                        style="width: 100%; height: 600px; object-fit: contain; background: #f8f9fa;">
                </div>
            </div>

            <style>
                .custom-block-image-wrap {
                    background: #f8f9fa;
                    border-radius: 12px;
                    padding: 20px;
                    margin-bottom: 30px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                .custom-block-image {
                    transition: transform 0.3s ease;
                }

                .custom-block-image:hover {
                    transform: scale(1.02);
                }

                @media (max-width: 768px) {
                    .custom-block-image-wrap img {
                        height: 400px !important;
                    }
                }
            </style>
            <div class="col-lg-6 col-12">
                <div class="custom-block-info">
                    <h2 class="mb-4">{{ $product->title }}</h2>

                    <p class="mb-3">
                        <strong>Category:</strong> {{ $product->category->name }}
                    </p>

                    <p class="mb-3">
                        <strong>Price:</strong> ${{ number_format($product->price, 2) }}
                    </p>

                    <div class="custom-block-description mb-4">
                        <h5>Description:</h5>
                        <p>{{ $product->description }}</p>
                    </div>

                    @auth
                        <div class="d-flex gap-2">
                            <button wire:click="placeOrder({{ $product->id }})" class="btn custom-btn">
                                Place an Order
                            </button>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn custom-btn">
                            Login to Purchase
                        </a>
                    @endauth

                    @if (session()->has('message'))
                        <div class="alert alert-success mt-3">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
