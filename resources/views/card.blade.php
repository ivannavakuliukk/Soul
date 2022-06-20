<div class = "items__1 item">
  <div class = "item__container">
    <div class = "item__content">
      <div class = "pic">
        <a href = "{{route('product', $product->code)}}">
          <img src= {{$product->image1}} alt="">
        </a>
      </div>
      <div class = "item__footer">
        <p>{{$product->name}}</p>
        <div class = "iconprice">
          <p>₴{{$product->price}}</p>
          <a href="{{route('product', $product->code)}}"><img src="/icons/shopping-cart (3) 1.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</div>