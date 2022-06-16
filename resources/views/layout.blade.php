<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/forms.css')}}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
  <header class = "header">
    <div class = "header__conrainer _container">
      <div class = "header__content">
        <a class = "header__main_ref" href = "/"><div class = "header__logo">SOUL</div>
        <div class="header__search">
          <input type="text" class="header__text" placeholder="Пошук">
          <a class="header__icon1" href ="">
            <img src="/icons/search 1.png" alt="">
          </a>
        </div>
        <div class = "header__icons"> 
          <a href=""><img src="/icons/user (1) 1.png" class = "header__icon2" alt=""></a>
          <a href="/review"><img src="/icons/comment.png" class = "header__icon3" alt=""></a>
        </div>
      </div>
    </div>
  </header>
  @yield('main_content')
  <footer class = "footer">
    <div class = "footer__container _container">
      <div class = "footer__content">
        <div class = "footer__column1 f_column">
          <div class = "footer__text1 f_column__text">
            Про нас
          </div>
          <div class = "footer__links1 f_column__links">
            <a href="">Про компанію</a>
            <a href="">Відгуки</a>
          </div> 
        </div>
        <div class = "footer__column2 f_column">
          <div class = "footer__text2 f_column__text">
            Послуги
          </div>
          <div class = "footer__links2 f_column__links">
            <a href="">Сертифікати</a>
            <a href="">Програма кешбек</a>
            <a href="">Знижки</a>
          </div> 
        </div>
        <div class = "footer__column3 f_column">
          <div class = "footer__text3 f_column__text">
            Контакти
          </div>
          <div class = "footer__links3 f_column__links">
            <a href="">Instagrem</a>
            <a href="">Facebook</a>
            <a href="">Pinterest</a>
            <a href="">Email</a>
          </div> 
        </div>
        <div class = "footer__column4 f_column">
          <div class = "footer__text4 f_column__text">
            Покупки онлайн
          </div>
          <div class = "footer__links4 f_column__links">
            <a href="">Оплата</a>
            <a href="">Доставка</a>
            <a href="">Умови продажу</a>
            <a href="">Умови повернення</a>
          </div> 
        </div>
      </div>
    </div>
  </footer>
</body>
</html>