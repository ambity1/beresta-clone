<div class="container categories">
    @foreach($categories as $category)
        <a class="categories-el" href="/catalog/{{$category->alias}}">
            <h2>{{$category->name}}</h2>
            <img src="/storage/{{$category->image}}">
        </a>

    @endforeach
    {{--        <a class="categories-el" href="/catalog/dachnye-tualety">--}}
    {{--            <h2>Дачные туалеты</h2>--}}
    {{--            <img src="/assets/img/caticons/wc.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/besedki">--}}
    {{--            <h2>Качели</h2>--}}
    {{--            <img src="/assets/img/caticons/swings.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/hozbloki">--}}
    {{--            <h2>Бытовки</h2>--}}
    {{--            <img src="/assets/img/caticons/byt.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/kacheli">--}}
    {{--            <h2>Беседки</h2>--}}
    {{--            <img src="/assets/img/caticons/besedka.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/bytovki">--}}
    {{--            <h2>Хозблоки</h2>--}}
    {{--            <img src="/assets/img/caticons/hozblok.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/dachnye-dushevye">--}}
    {{--            <h2>Душевые кабины</h2>--}}
    {{--            <img src="/assets/img/caticons/shower.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/dachnaya-mebel">--}}
    {{--            <h2>Дачная мебель</h2>--}}
    {{--            <img src="/assets/img/caticons/dacha.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/mangalnye-zony">--}}
    {{--            <h2>Мангальные зоны</h2>--}}
    {{--            <img src="/assets/img/caticons/mangal.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/mangaly">--}}
    {{--            <h2>Мангалы</h2>--}}
    {{--            <img src="/assets/img/caticons/mangal.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/dlya-givotnyh">--}}
    {{--            <h2>Для животных</h2>--}}
    {{--            <img src="/assets/img/caticons/pets.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/budki">--}}
    {{--            <h2>Будки</h2>--}}
    {{--            <img src="/assets/img/caticons/byt.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/posty-ohrany">--}}
    {{--            <h2>Пост охраны</h2>--}}
    {{--            <img src="/assets/img/caticons/post.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/tochki-prodag">--}}
    {{--            <h2>Точки продаж</h2>--}}
    {{--            <img src="/assets/img/caticons/tochka.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/mobilnye-zdanya">--}}
    {{--            <h2>Мобильные здания</h2>--}}
    {{--            <img src="/assets/img/caticons/house.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/drovniki">--}}
    {{--            <h2>Дровники</h2>--}}
    {{--            <img src="/assets/img/caticons/log.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/ostanovki">--}}
    {{--            <h2>Остановки</h2>--}}
    {{--            <img src="/assets/img/caticons/busstop.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/ploschyadki-tbo">--}}
    {{--            <h2>Площадки ТБО</h2>--}}
    {{--            <img src="/assets/img/caticons/tbo.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/dlya-detei">--}}
    {{--            <h2>Для детей</h2>--}}
    {{--            <img src="/assets/img/caticons/child.svg">--}}
    {{--        </a>--}}
    {{--        <a class="categories-el" href="/catalog/dlya-sada">--}}
    {{--            <h2>Для сада</h2>--}}
    {{--            <img src="/assets/img/caticons/garden.svg">--}}
    {{--        </a>--}}
</div>
