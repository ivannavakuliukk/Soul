@extends('catalog_type')
@section('category_name')
<p>{{$category->name}}       {{$category->products->count()}}</p>
@endsection
@section('items_content')
<div class = "items__content">
  @foreach($category->products as $product)
    @include('card', compact('product'))
  @endforeach
</div>
@endsection