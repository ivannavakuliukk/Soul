@extends('layout')

@section('title')Каталог@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/catalog.css')}}">
<main class = "page">
  <section class =go_back>
    <div class = "go_back__container _container">
      <div class = go_back__content>
        <a href="/"><img src="/icons/right-arrow 1.png" alt=""></a> 
        @yield('category_name')
      </div>
    </div>
  </section>
  <section class = "catalogue">
    <div class = "catalogue__container _container">
      <div class = "catalogue__content">
        <div class = "menu">
          <div class = "menu__container">
            <div class = "menu__content">
              <div class = "menu__title1">
                <p>Фільтри</p>
              </div>
              <div class = "menu__links1">
                <a href="/catalog">Все</a>
                <a href="/catalog/newcollection">Нова колекція</a>
                <a href="/catalog/outerwear">Верхній одяг</a>
                <a href="/catalog/dresses">Сукні</a>
                <a href="/catalog/skirts">Спідниці</a>
                <a href="/catalog/tops">Боді|Топи</a>
                <a href="/catalog/blouses">Сорочки</a>
                <a href="/catalog/pants">Штани</a>
                <a href="/catalog/suits">Костюми</a>
              </div>
              <div class = "menu__title2">
                <p>Колір</p>
              </div>
              <div class = "menu__links2">
                <a href="/catalog/color/beige">Бежевий</a>
                <a href="/catalog/color/red">Червоний</a>
                <a href="/catalog/color/black">Чорний</a>
                <a href="/catalog/color/green">Зелений</a>
                <a href="/catalog/color/pink">Рожевий</a>
                <a href="/catalog/color/white">Білий</a>
              </div>
            </div>
          </div>
        </div>
        <div class = "items">
          <div class = "items__container">
            @yield('items_content')
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection