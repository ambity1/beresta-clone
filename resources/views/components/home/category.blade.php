<section class="products_catalog-main">
    <div class="container">
        <h3>Категории</h3>
    </div>

    <div class="container products_catalog-thick products_catalog">
        <div class="d-flex">
            <div class="d-flex">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[0]->alias}}"><h2>{{$categoriesOnMainPage[0]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[0]->image}}"></a>
            </div>
            <div class="d-flex flex-column">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[1]->alias}}"><h2>{{$categoriesOnMainPage[1]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[1]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[2]->alias}}"><h2>{{$categoriesOnMainPage[2]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[2]->image}}"></a>
            </div>
        </div>
        <div class="d-flex">
            <div class="d-flex">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[3]->alias}}"><h2>{{$categoriesOnMainPage[3]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[3]->image}}"></a>
            </div>
            <div class="d-flex flex-column">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[4]->alias}}"><h2>{{$categoriesOnMainPage[5]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[4]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[5]->alias}}"><h2>{{$categoriesOnMainPage[4]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[5]->image}}"></a>
            </div>
        </div>
    </div>
    <div class="container products_catalog products_catalog-thin">
        <div class="d-flex flex-column">
            <div class="d-flex">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[0]->alias}}"><h2>{{$categoriesOnMainPage[0]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[0]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[1]->alias}}"><h2>{{$categoriesOnMainPage[1]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[1]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[2]->alias}}"><h2>{{$categoriesOnMainPage[2]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[2]->image}}"></a>
            </div>
            <div class="d-flex">
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[3]->alias}}"><h2>{{$categoriesOnMainPage[3]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[3]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[4]->alias}}"><h2>{{$categoriesOnMainPage[5]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[4]->image}}"></a>
                <a class="products_catalog-el" href="/catalog/{{$categoriesOnMainPage[5]->alias}}"><h2>{{$categoriesOnMainPage[4]->name}}</h2><img src="/storage/{{$categoriesOnMainPage[5]->image}}"></a>
            </div>
        </div>

    </div>
    <a class="all_products d-flex justify-content-end container" href="/catalog">Все категории
        <img src="/images//Arrow1.svg">
    </a>
</section>
