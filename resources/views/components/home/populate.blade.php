<section class="populate">
    <div class="container">
        <h3>Популярные</h3>
    </div>
    <div class="container">
        <div class="swiper-button-prev">
        </div>
        <div class="swiper-button-next">
        </div>
        <div class="populate-swiper">
            <div class="swiper-wrapper">
                @foreach($productsPopulate as $product)
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
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<script>

    document.addEventListener('DOMContentLoaded', () => {
        const populate = new Swiper('.populate-swiper', {
            direction: 'horizontal',
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.populate .swiper-button-next',
                prevEl: '.populate .swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    centeredSlides: false
                },
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    centeredSlides: false
                },
            }
        });
        const profit = new Swiper('.profit-swiper', {
            direction: 'horizontal',
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.profit .swiper-button-next',
                prevEl: '.profit .swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    centeredSlides: false
                },
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    centeredSlides: false
                },
            }
        });
        const related = new Swiper('.related-swiper', {
            direction: 'horizontal',
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.related .swiper-button-next',
                prevEl: '.related .swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    centeredSlides: false
                },
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    centeredSlides: false
                },
            }
        });
        const similar = new Swiper('.similar-swiper', {
            direction: 'horizontal',loc
            slidesPerView: 3,
            spaceBetween: 20,
            navigation: {
                nextEl: '.similar .swiper-button-next',
                prevEl: '.similar .swiper-button-prev',
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    centeredSlides: false
                },
                1500: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                    centeredSlides: false
                },
            }
        });
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.0.5/swiper-bundle.min.js"
        integrity="sha512-cEcJcdNCHLm3YSMAwsI/NeHFqfgNQvO0C27zkPuYZbYjhKlS9+kqO5hZ9YltQ4GaTDpePDQ2SrEk8gHUVaqxig=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
