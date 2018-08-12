@extends('_layout')

@section('title', 'Thank you')

@section('content')
    <div class="page-header">
        <h1>Thank you</h1>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Thank you</div>

                <div class="panel-body">
                    <p>
                        Your order was successfully completed!
                    </p>
                    <p>
                        We send a notification to your email: {{$user->email}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    @if (! Auth::guest())
                        <a class="btn btn-default btn-lg" href="{{route('store.products')}}">Go to products</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection