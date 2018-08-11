@extends('_layout')

@section('title', 'Payment')

@section('content')
    <div class="page-header">
        <h1>Payment</h1>
    </div>

    <div class="row">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
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
            @forelse($cart as $product)
                <tr>
                    <th scope="row">{{$product['id']}}</th>
                    <td>{{$product['name']}}</td>
                    <td>${{ number_format($product['price'],2) }}</td>
                    <td>{{$product['amount']}}</td>
                    <td>{{number_format($product['price'] * $product['amount'], 2)}}</td>
                </tr>
                @php
                    $total = $total + ($product['price'] * $product['amount']);
                @endphp
            @empty
                Cart is empty.
            @endforelse
            <tr>
                <td colspan="4" class="text-right">Total</td>
                <td><b>${{number_format($total,2)}}</b></td>
            </tr>
            </tbody>
        </table>

    </div>
@endsection