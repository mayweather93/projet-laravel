@extends('layouts.app')


@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong>Il y a quelques problèmes avec votre saisie.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="product-details ptb-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-5 pr-70">
                    <img src="/assets/img/product-details/l1-details-5.png" alt="">
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$product->name}}</h3>
                    <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star red-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div>
                    <div class="details-price">
                        <span>${{$product->price}}</span>
                    </div>
                    <p>{!! $product->description !!}</p>

                    <div class="quickview-plus-minus">

                        <div class="quickview-btn-cart">
                           
                            <form action="{{route('orders.store')}}" method="post">
                               @csrf
                               <input type="hidden" name="product_id" value="{{$product->id}}">
                                <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- reviews section --}}

{{-- @include('product._reviews') --}}

<!-- related product area start -->
{{-- @include('product._related-product') --}}

@endsection
