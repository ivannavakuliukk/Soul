@extends('layout')

@section('title')Каталог@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/catalog.css')}}">
<main class = "page">
  <section class =go_back>
    <div class = "go_back__container _container">
      <div class = go_back__content>
        <a href="index.php"><img src="icons/right-arrow 1.png" alt=""></a> 
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
                <a href="">Все</a>
                <a href="">Нова колекція</a>
                <a href="">Верхній одяг</a>
                <a href="">Сукні</a>
                <a href="">Спідниці</a>
                <a href="">Боді|Топи</a>
                <a href="">Сорочки</a>
                <a href="">Штани</a>
                <a href="">Костюми</a>
              </div>
              <div class = "menu__title2">
                <p>Сортування</p>
              </div>
              <div class = "menu__links2">
                <a href="">За замовчуванням</a>
                <a href="">Спочатку дешевше</a>
                <a href="">Спочатку дорожче</a>
              </div>
            </div>
          </div>
        </div>
        <div class = "items">
          <div class = "items__container">
            <div class = "items__content">
              <div class = "items__1 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/Rectangle13.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Асиметричне боді зі збірками</p>
                      <div class = "iconprice">
                        <p>₴899</p>
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
                      <a href = "/card">
                        <img src="images/1.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Бавовняна куртка із гудзиками</p>
                      <div class = "iconprice">
                        <p>₴1699</p>
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
                      <a href = "/card">
                        <img src="images/2.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Сукня із замші зі стразами</p>
                      <div class = "iconprice">
                        <p>₴999</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__4 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/3.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Сатинова сукня</p>
                      <div class = "iconprice">
                        <p>₴1899</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__5 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/4.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Пальто з вовною</p>
                      <div class = "iconprice">
                        <p>₴4999</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__6 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/5.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Міні-спідниця із заходом</p>
                      <div class = "iconprice">
                        <p>₴1399</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              <div class = "items__7 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                    <a href = "/card">
                        <img src="images/6.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Світлий костюм</p>
                      <div class = "iconprice">
                        <p>₴3999</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__8 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/7.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Блузка з принтом і воланами</p>
                      <div class = "iconprice">
                        <p>₴1399</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__9 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/8.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Лляна укорочена сорочка</p>
                      <div class = "iconprice">
                        <p>₴999</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
              <div class = "items__10 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/9.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Плюшеві штани джогери</p>
                      <div class = "iconprice">
                        <p>₴799</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__11 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/10.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Топ у спортивному стилі</p>
                      <div class = "iconprice">
                        <p>₴999</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class = "items__12 item">
                <div class = "item__container">
                  <div class = "item__content">
                    <div class = "pic">
                      <a href = "/card">
                        <img src="images/11.png" alt="">
                      </a>
                    </div>
                    <div class = "item__footer">
                      <p>Атласно-лляна сукня</p>
                      <div class = "iconprice">
                        <p>₴1299</p>
                        <a href=""><img src="icons/shopping-cart (3) 1.png" alt=""></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
            </div>
            <div class = "page__nums">
              <div class = "page__nums__content">
                <a href="" class="page_num">1</a>
                <a href="" class="page_num">2</a>
                <a href="" class="page_num">3</a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection