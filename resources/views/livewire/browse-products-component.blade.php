<div class="row">
    @php
    use App\Models\Product;
    $products = Product::all(); // Fetch all products from the database, adjust as needed (e.g., limit, trending)
@endphp
<div class="col-lg-12 col-12">
    <div class="section-title-wrap mb-5">
        <h4 class="section-title">Trending Product</h4>
    </div>
</div>

@foreach ($products as $product)
    <div class="col-lg-4 col-12 mb-4 mb-lg-4">
        <div class="custom-block custom-block-full">
            <div class="custom-block-image-wrap">
                <a href="{{ route('product.show', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image) }}" class="custom-block-image img-fluid" alt="{{ $product->title }}">
                </a>
            </div>

            <div class="custom-block-info">
                <h5 class="mb-2">
                    <a href="{{ route('product.show', $product->id) }}">
                        {{ $product->title }}
                    </a>
                </h5>
                
               

                <p class="mb-0">{{ $product->description }}</p>

                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                    <a href="">
                        <span>
                            {{ $product->price }} fcfa
                        </span>
                    </a>

                   
                </div>
            </div>

            <div class="social-share d-flex flex-column ms-auto">
                <a href="user/assets/#" class="badge ms-auto">
                    <i class="bi-heart"></i>
                </a>

                <a href="user/assets/#" class="badge ms-auto">
                    <i class="bi-bookmark"></i>
                </a>
            </div>
        </div>
    </div>
@endforeach


</div>