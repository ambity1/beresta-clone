<section class="profit">
    <div class="container">
        <h3>Выгодные предложения</h3>
    </div>
    <div class="container">
        <div class="swiper-button-prev">\
        </div>
        <div class="swiper-button-next">
        </div>
        <div class="profit-swiper">
            <div class="swiper-wrapper">
                @foreach($productsBenefit as $product)
                    <div class="swiper-slide d-flex flex-column" style="width: 290.667px; margin-right: 30px;">
                        <a href="/catalog/{{$product->alias}}" class="slide-photo">
                            <img src="/storage/{{$product->image}}"
                                 alt="{{$product->name}}">
                        </a>
                        <div class="slide-desc d-flex flex-column">
                            <h5>{{$product->name}}</h5>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="d-flex flex-column">
                                    <span class="slide-price">{{$product->price}} ₽</span>
                                    <span class="slide-oldPrice">{{$product->oldPrice}} ₽</span>
                                </div>
                                <a class="slide-btn btn-order">Заказать</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
</section>
