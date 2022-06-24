@extends('layout')

@section('title')Форма додавання відгуку@endsection
@section('main_content')
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/review.css')}}">

<div class = "form_container">

  <h1>Додайте свій відгук</h1>

  @if($errors->any())
    <div class = "msg">
      <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="/review/check" method = "post" class = "user_form">
    @csrf
    <label>Пошта</label>
    <input type = "email" name = "email" id = "email" placeholder= "Введіть свою пошту">
    <label>Тема</label>
    <input type = "text" name = "subject" id = "subject" placeholder= "Введіть тему відгуку">
    <textarea name="message" id = "message" placeholder="Введіть відгук"></textarea>
    <button type = "submit">Надіслати</button>
  </form>

  <h1>Всі відгуки</h1>
  @foreach($reviews as $el)
  <div class = 'review'>
    <h3>{{$el->subject}}</h3>
    <p>{{$el->email}}</p>
    <p>{{$el->message}}</p>
  </div>
  @endforeach
</div>
@endsection