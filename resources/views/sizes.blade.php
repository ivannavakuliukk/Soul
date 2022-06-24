@extends('layout')
@section('title')Розміри@endsection
<link rel="stylesheet" type="text/css" href="{{URL::asset('css/basket.css')}}">
@section('main_content')
<div class = "basket">
  <div class = "basket__container _container">
    <div class = "basket__content">
      <h1>Таблиця розмірів</h1>
      <p>Обери свій розмір</p>
      <div class = "basket__table">
        <table>
          <thead>
            <th>РОЗМІР МІЖНАРОДНИЙ</th>
            <th>РОЗМІР УКРАЇНСЬКИЙ</th>
            <th>ОБХВАТ ГРУДЕЙ</th>
            <th>ОБХВАТ ТАЛІЇ</th>
            <th>ОБХВАТ БЕДЕР</th>
          </thead>
          <tbody>
            @foreach($sizes as $size)
            <tr>
              <td>
                {{$size->intern_size}}
              </td>
              <td>
                {{$size->ukr_size}}
              </td>
              <td>
                {{$size->breast}}
              </td>
              <td>
                {{$size->waist}}
              </td>
              <td>
                {{$size->hips}}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection