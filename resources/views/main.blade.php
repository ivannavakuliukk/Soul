@extends('layout')

@section('title')Головна сторінка@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<main class = "page">
  <section class="soul">
      <div class = "soul__container _container">
          <div class = "soul__content1">
            <img class = "soul__1img" src="/images/hanen-souhail-1KO9ytYcGj4-unsplash 1.png" alt="">
            <a href="/catalog" class="soul__btn btn">ПЕРЕЙТИ В КАТАЛОГ</a>
          </div>
          <div class ="soul__content2">
            <div class="title">SOUL</div>
            <div class="soul__text">
              Інтернет-магазин жіночого одягу 
            </div>
            <img class = "soul__2img" src="/images/farol-106-WyT3qwO2c8s-unsplash 1.png" alt="">
          </div>
      </div>
    </section>
  <section class ="chooseus">
    <div class = "chooseus__container _container">
      <div class ="chooseus__content">
        <div class = "chooseus__title">
          ЧОМУ ПОТРІБНО ОБРАТИ НАС?
        </div>
        <div class = "chooseus__box1">
          <div class = "chooseus__num1 num">
            01
          </div>
          <div class = "chooseus_title1 box_title">
            ХОРОША ЯКІСТЬ
          </div>
          <div class = "chooseus_text1 box_text">
            <p>Лише природні матеріали.<br>
            Ніякої синтетики.<br>
            Одяг завжди приємний на дотик.</p>
          </div>
        </div>
        <div class = "chooseus__box2">
          <div class = "chooseus__num2 num">
            02
          </div>
          <div class = "chooseus_title2 box_title">
            ДОСТУПНІСТЬ
          </div>
          <div class = "chooseus_text2 box_text">
            <p>Ціни відповідають якості.<br>
            Часті знижки.<br>
            Постійні клієнти отримують дисконтні картки.<br>
          </div>
        </div>
        <div class = "chooseus__box3">
          <div class = "chooseus__num2 num">
            03
          </div>
          <div class = "chooseus_title3 box_title">
            ОСОБЛИВИЙ СТИЛЬ
          </div>
          <div class = "chooseus_text3 box_text">
            <p>Наш одяг - поєднання класичного, жіночного і<br>
            елегантного стилів. Можна обрати лук для будь-<br>
            якої події.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class = "new">
    <div class = "new__container _container">
      <div class = "new__content">
        <div class = "new__title">
          <div class = "new__title1">
            НОВА КОЛЕКЦІЯ
          </div>
          <div class = "new__title2">
            Studio collection
          </div>
        </div>
        <div class = "new__photos">
          <div class = "new__img1">
            <img src="/images/Rectangle9.png" alt="">
          </div>
          <div class = "new__img2">
            <img src="/images/Rectangle8.png" alt="">
          </div>
          <div class = "new__img3">
            <img src="/images/Rectangle10.png" alt="">
          </div>
        </div>
        <div class = "new__arrowsbtn">
          <div class = "new__icon1">
            <img src="/icons/down-arrow 2.png" alt="">
          </div>
          <a href="/catalog" class="new__btn btn">ПЕРЕЙТИ В КАТАЛОГ</a>
          <div class = "new__icon2">
            <img src="/icons/down-arrow 1.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection