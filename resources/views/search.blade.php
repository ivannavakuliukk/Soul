@extends('catalog_type')
@section('category_name')
<p>{{$s}}</p>
@endsection
@section('items_content')
  <div class = "items__content">
    @if($products->count())
      @foreach($products as $product)
        @include('card', compact('product'))
      @endforeach
    @else
      <p class = "notfound">Не знайдено записів за вашим запитом...</p>
    @endif
  </div>
@endsection