<div class="productsGrid">

    @foreach($products as $product)
        <div class="productsGrid-el d-flex flex-column">
            <a href="/catalog/{{$category->alias}}/{{$product->alias}}" class="slide-photo"
               style="background-image: url('/storage/{{$product->image}}')"></a>
            <div class="slide-desc d-flex flex-column">
                <a href="/catalog/{{$category->alias}}/{{$product->alias}}">
                    <h5>{{$product->name}}</h5>
                </a>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex flex-column">
                        <span class="slide-price">от {{$product->price}} ₽</span>
                        <span class="slide-oldPrice">9 000₽</span>
                    </div>
                    <a class="slide-btn btn-order">Заказать</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
