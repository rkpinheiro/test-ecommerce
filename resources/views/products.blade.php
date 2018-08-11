@extends('_layout')

@section('title', 'Products')

@section('content')
    <div class="page-header">
        <h1>Products</h1>
    </div>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4">
                <div class="thumbnail">
                    {{--<img src="..." alt="...">--}}
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p><b>${{number_format($product->price,2)}}</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in augue finibus, volutpat elit
                            id, egestas lectus. Curabitur mi ipsum, mattis et ornare id, egestas id magna. Donec sed
                            libero purus.</p>
                        <p class="text-center">
                            <a href="#" class="btn btn-primary" role="button">Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>
        @empty
            No products.
        @endforelse
    </div>
@endsection