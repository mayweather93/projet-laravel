<div class="col-4">
    <div class="product-wrapper product-border mb-24">
    <h1>test</h1>
        <div class="img">
            <a href="{{route('products.show', $product)}}">
                @if(!empty($product->cover_img))
                    <img src="{{asset('storage/'.$product->cover_img)}}" alt="">
                @else
                    <img src="https://loremflickr.com/320/240" alt="">
                @endif
            </a>
            <div class="product-action-right">
                <a class="animate-right" href="{{route('products.show', $product)}}" title="View">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="">
                    <i class="pe-7s-cart"></i>
                </a>
                <a class="animate-left" title="Wishlist" href="#">
                    <i class="pe-7s-like"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div>
            <h4><a href="{{route('products.show', $product)}}">{{$product->name}}</a></h4>
            <span>{{$product->description}}</span>
            <h5>$ {{$product->price}}</h5>
        </div>
    </div>
</div>
