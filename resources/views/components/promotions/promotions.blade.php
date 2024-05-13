<section class="service-other">
    <div class="container">
        <div class="service-other-blocks service-other-main" >
            @foreach($promotions as $promotion)
                <a class="d-flex align-items-end" href="/promotions/{{$promotion->alias}}">
                    <p>{{$promotion->name}}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
