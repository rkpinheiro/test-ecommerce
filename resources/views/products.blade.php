@inject('request', 'Illuminate\Http\Request' )

@extends('_layout')

@section('title', 'Products')

@section('content')
    <div class="page-header">
        <h1>
            <span>Products</span>
            <div class="pull-right">
                <button type="button" class="btn btn-link set-currency" data-currency="USD">USD</button>
                <button type="button" class="btn btn-link set-currency" data-currency="EUR">EUR</button>
                <button type="button" class="btn btn-link set-currency" data-currency="BRL">BRL</button>
            </div>
        </h1>
    </div>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>{{$product->name}}</h3>
                        <p>
                            <b>{{ currency($product->price, 'USD', $request->session()->get('user-currency') ? $request->session()->get('user-currency') : 'USD') }}</b>
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in augue finibus, volutpat elit
                            id, egestas lectus. Curabitur mi ipsum, mattis et ornare id, egestas id magna. Donec sed
                            libero purus.</p>
                        <p class="text-center">
                            <button type="button" class="btn btn-primary add-to-cart" role="button"
                                    data-id="{{$product->id}}">Add to cart
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        @empty
            No products.
        @endforelse
    </div>
@endsection