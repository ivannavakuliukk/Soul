@extends('layout')

@section('title')Сторінка продукту@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_card.css')}}">
<main class = "page">
  <section class = "go_back">
    <div class = "go_back__container _container">
      <a href="/catalog"><img src="icons/right-arrow 1.png" alt=""></a>
    </div>
  </section>
  <section class = "card">
    <div class = "card__container _container">
      <div class = "card__content">
        <div class = "card__images">
          <div class = "card__column1">
            <img src = "images/card1.png">
            <img src = "images/card2.png" class = "img2">
          </div>
          <div class = "card__column2">
            <img src = "images/card3.png">
          </div>
        </div>
        <div class = "card__info">
          <div class = "card__info__container">
            <div class = "card__info__content">
              <div class ="card__describe">
                <p class = card__name>Об’ємна сукня із сатиновим ефектом</p>
                <p class = card__text>Сукня з прямим верхом і тонкими бретелями. Застібається на металевий гачок і приховану блискавку ззаду. Об’ємні волани на грудях.</p>
                <p class = card__text>Колір: сірувато-білий</p>
                <p class = card__text>1499 UAH</p>
              </div>
              <div class = "card__sizes">
                <a href="" class="size">XS</a>
                <a href="" class="size"> S</a>
                <a href="" class="size"> M</a>
                <a href="" class="size"> L</a>
                <a href="" class="size">XL</a>
                <a href="" class="size">XXL</a>
              </div>
              <div class = "card__buy">
                <p class = card__text1>Знайди свій розмір —</p>
                <a href="" class="card__findsize">Таблиця розмірів</a>
                <a href="" class="card__btn">Додати у кошик<img src = "icons/shopping-cart (3) 1.png"></a>
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
          <div class = "items__1 item">
            <div class = "item__container">
              <div class = "item__content">
                  <div class = "pic">
                    <img src="images/rec1.png" alt="">
                  </div>
                  <div class = "item__footer">
                    <p>Коротка комбінована сукня</p>
                    <div class = "iconprice">
                      <p>₴1899</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "items__2 item">
              <div class = "item__container">
                <div class = "item__content">
                  <div class = "pic">
                    <img src="images/rec2.png" alt="">
                  </div>
                  <div class = "item__footer">
                    <p>Драпірована еластична сукня</p>
                    <div class = "iconprice">
                      <p>₴2699</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class = "items__3 item">
              <div class = "item__container">
                <div class = "item__content">
                  <div class = "pic">
                    <img src="images/rec3.png" alt="">
                  </div>
                  <div class = "item__footer">
                    <p>Драпірована сукня-сорочка</p>
                    <div class = "iconprice">
                      <p>₴1499</p>
                      <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div>
  </div>
  </section>
  <div class = "show_more">
    <a href="" class="show_more__btn">Показати більше</a>
  </div>
  <div class ="retreat">
    <div class = "retreat__tab">
    </div>
  </div>
</main>
@endsection