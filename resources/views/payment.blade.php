@inject('request', 'Illuminate\Http\Request' )

@extends('_layout')

@section('title', 'Payment')

@section('content')
    <div class="page-header">
        <h1>
            <span>Payment</span>
            <div class="pull-right">
                <button type="button" class="btn btn-link set-currency" data-currency="USD">USD</button>
                <button type="button" class="btn btn-link set-currency" data-currency="EUR">EUR</button>
                <button type="button" class="btn btn-link set-currency" data-currency="BRL">BRL</button>
            </div>
        </h1>
    </div>

    <div class="row">
        @if($cart)
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Amount</th>
                    <th>subtotal</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach($cart as $product)
                    <tr>
                        <td>{{$product['name']}}</td>
                        <td>
                            {{
                                currency(
                                    $product['price'],
                                    'USD',
                                    $request->session()->get('user-currency') ? $request->session()->get('user-currency') : 'USD'
                                )
                            }}
                        </td>
                        <td>{{$product['amount']}}</td>
                        <td>{{currency($product['price'] * $product['amount'], 'USD', $request->session()->get('user-currency') ? $request->session()->get('user-currency') : 'USD') }}</td>
                    </tr>
                    @php
                        $total = $total + ($product['price'] * $product['amount']);
                    @endphp
                @endforeach
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td>
                        <b>{{currency($total,'USD', $request->session()->get('user-currency') ? $request->session()->get('user-currency') : 'USD')}}</b>
                    </td>
                </tr>
                </tbody>
            </table>
        @else
            Cart is empty.
        @endif
    </div>
    <div class="row">
        <div class="text-center">
            <a class="btn btn-default btn-lg" href="{{route('store.products')}}">Go to products</a>
            @if($cart)
                <a class="btn btn-default btn-lg" href="#"
                   onclick="event.preventDefault();document.getElementById('clear-cart-form').submit();">
                    Clear cart
                </a>
                <form id="clear-cart-form" action="{{ route('clear-cart') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <a class="btn btn-primary btn-lg" href="#"
                   onclick="event.preventDefault();document.getElementById('buy-form').submit();">
                    Buy
                </a>
                <form id="buy-form" action="{{ route('checkout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </div>
@endsection