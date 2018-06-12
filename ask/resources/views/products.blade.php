@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                 @foreach($arrProduct as $product)
                 <div>        
                    <h3>{{ $product['title'] }}</h3>
                    <img style="width:230px;height:230px;float:left;margin-right:10px;margin-bottom:10px;" src="{{ $product['link'] }}" />
                    {!! $product['description'] !!}
                    
               
                 </div><hr/>
                          @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
