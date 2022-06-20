@extends('catalog_type')
@section('category_name')
<p>{{$color->name}}       {{$color->products->count()}}</p>
@endsection
@section('items_content')
<div class = "items__content">
  @foreach($color->products as $product)
    @include('card', compact('product'))
  @endforeach
</div>
@endsection