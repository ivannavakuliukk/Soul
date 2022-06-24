@extends('layout')
@section('title')Підтвердження замовлення@endsection
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/review.css')}}">
@section('main_content')
<main class = "page">
  <div class = "form_container">
    <h1>Підтвердіть замовлення</h1>
    <p class = "sum">Загальна сума замовлення: {{$order->getFullPrice()}}<br>Вкажіть ім'я та номер телефону, щоб менеджер міг з вами зв'язатись</p>
    <form action="{{route('basket_confirm')}}" method = "post" class = "user_form">
      @csrf
      <label>Ім'я</label>
      <input type = "string" name = "name" id = "name" placeholder= "Введіть своє ім'я">
      <label>Номер телефону</label>
      <input type = "string" name = "phone" id = "phone" placeholder= "Введіть номер телефону">
      <button type = "submit">Підтвердити замовлення</button>
    </form>
  </div>
</main>
@endsection