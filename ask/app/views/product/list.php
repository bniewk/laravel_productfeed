@extends('layouts.app.blade')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                       @foreach($arrProduct as $product_id => $product)
                            <div>
                              <div class="title">{{ $product['title'] }}</div>
                            </div>
                          @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
