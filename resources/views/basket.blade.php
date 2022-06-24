@extends('layout')

@section('title')Корзина@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/basket.css')}}">
  <div class = "basket">
    <div class = "basket__container _container">
      <div class = "basket__content">
        <h1>Корзина</h1>
        <p>Оформлення замовлення</p>
        <div class = "basket__table">
          <table>
            <thead>
              <th>Н А З В А</th>
              <th>Р О З М І Р</th>
              <th>К І Л Ь К І С Т Ь</th>
              <th>Ц І Н А</th>
              <th>В А Р Т І С Т Ь</th>
            </thead>
            <tbody>
              @foreach($order->products as $product)
              <tr>
                <td class = "with_photo">
                  <img src = {{$product->image3}}>
                  <a href = "{{route('product', [$product->code])}}">{{$product->name}}</a>
                </td>
                <td>
                  {{$product->pivot->size}}
                </td>
                <td>
                  <div class = "count">
                    <form action = "{{route('basket_remove', $product)}}" method = "post">
                      <button type = "submit">
                        <img src = "/icons/down-arrow 2.png">
                      </button>
                      @csrf
                    </form>
                    {{$product->pivot->count}}
                    <form action = "{{route('basket_add', $product)}}" method = "post">
                      <button type = "submit">
                        <img src = "/icons/down-arrow 1.png">
                      </button>
                      @csrf
                    </form>
                  </div>
                </td>
                <td>
                  {{$product->price}}
                </td>
                <td>
                  {{$product->getPriceForCount($product->pivot->count)}}
                </td>
              </tr>
              @endforeach
              <tr>
                <td >
                  Загальна сума
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                </td>
                <td>
                  {{$order->getFullPrice()}}
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <a href = "{{route('basket_place')}}" class = "order">Оформити замовлення</a> 
      </div>
    </div>
  </div>
  @endsection