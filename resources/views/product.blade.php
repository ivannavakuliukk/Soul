@extends('layout')

@section('title')Сторінка продукту@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_card.css')}}">
<main class = "page">
  <section class = "go_back">
    <div class = "go_back__container _container">
      <a href="/catalog"><img src="icons/right-arrow 1.png" alt=""></a>
      <p>
      @foreach($product->categories as $category)
        {{$category->name}}    
      @endforeach
      </p>
    </div>
  </section>
  <section class = "card">
    <div class = "card__container _container">
      <div class = "card__content">
        <div class = "card__images">
          <div class = "card__column1">
            <img src = {{$product->image2}} class = "img3">
            <img src = {{$product->image3}} class = "img2">
          </div>
          <div class = "card__column2">
            <img src = {{$product->image1}} class = "img1">
          </div>
        </div>
        <div class = "card__info">
          <div class = "card__info__container">
            <div class = "card__info__content">
              <div class ="card__describe">
                <p class = card__name>{{$product->name}}</p>
                <p class = card__text>{{$product->description}}</p>
                <p class = card__text>Колір: {{$product->color->name}}</p>
                <p class = card__text>{{$product->price}} UAH</p>
              </div>
              <div class = "card__sizes">
                <form action ="{{route('basket_add', $product)}}" method="post">
                  <input type="radio" id="sizeChoice1"
                  name="size" value="XS" checked class = "size">
                  <label for="sizeChoice1">XS</label>
             
                  <input type="radio" id="sizeChoice2"
                  name="size" value="S" class = "size">
                  <label for="sizeChoice2">S</label>
             
                  <input type="radio" id="sizeChoice3"
                  name="size" value="M" class = "size">
                  <label for="contactChoice3">M</label>

                  <input type="radio" id="sizeChoice4"
                  name="size" value="L" class = "size">
                  <label for="sizeChoice4">L</label>
            
                  <input type="radio" id="sizeChoice5"
                  name="size" value="XL" class = "size">
                  <label for="contactChoice5">XL</label>
                  <button type = "submit" class="card__btn" >Додати у кошик<img src="/icons/shopping-cart (3) 1.png" alt=""></button>
                  @csrf
                </form>
              </div>
              <div class = "card__buy">
                <p class = card__text1>Знайди свій розмір —</p>
                <a href="/choose/sizes" class="card__findsize">Таблиця розмірів</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class = "rec">
    <div class = "rec__title">
      ВАС МОЖЕ ЗАЦІКАВИТИ
    </div>
  </section>
  <div class = "rec_images _container" >
    <div class = "items">
      <div class = "items__container">
        <div class = "items__content">
          @foreach($reccomended as $product)
              @include('card', compact('product'))
          @endforeach
        </div>
      </div>
    <div>
  </div>
  </section>
  {{-- <div class = "show_more">
    <a href="" class="show_more__btn">Показати більше</a>
  </div> --}}
  <div class ="retreat">
    <div class = "retreat__tab">
    </div>
  </div>
</main>
@endsection