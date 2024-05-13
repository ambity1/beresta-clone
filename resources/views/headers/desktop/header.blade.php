<header>
    <div class="main-header">
        <div class="main-header-cont container d-flex flex-column">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/">
                    <img src="/images/logo.svg" alt="">
                </a>
                <form class="flex-grow form1 align-items-center">
                    <input type="text" name="search" placeholder="Поиск">
                    <button type="submit" class="d-flex align-items-center justify-content-center"><img src="/images/searchIcn.svg" alt=""></button>
                </form>
                <div class="links1 d-flex align-items-center">
                    <a href="tel:+73472131020" class="text-end">+7 (347) 213-10-20</a>
                    <a href="#call-to-buy" class="btn btn-call noShadow">Перезвоните мне</a>
                </div>
            </div>
            <form class="flex-grow form2 align-items-center">
                <input type="text" name="search" placeholder="Поиск">
                <button type="submit" class="d-flex align-items-center justify-content-center"><img src="/images/searchIcn.svg" alt=""></button>
            </form>
        </div>
    </div>
</header>

<script>

    document.addEventListener('DOMContentLoaded', ()=>{
        let header = document.querySelectorAll('.header-catalog');
        let hov = document.querySelectorAll('.header-catalog-hov');
        let cats = document.querySelector('.header-catalog-categories');
        let btn = document.querySelector('.header-catalog-btn');
        let closer = document.querySelector('.header-catalog-close');
        /*hov.forEach((item)=>{
           item.addEventListener('mouseover',()=>{
               if(!cats.classList.contains('active')){
                   cats.classList.add('active');
                   btn.classList.add('active');
               }
           });
            item.addEventListener('mouseleave',()=>{
                cats.classList.remove('active');
                btn.classList.remove('active');
            });
        });
        closer.addEventListener('click', ()=>{
            cats.classList.remove('active');
        });*/
        btn.addEventListener('click',()=>{
            cats.classList.toggle('active');
            btn.classList.toggle('active');
        });
        closer.addEventListener('click', ()=>{
            cats.classList.remove('active');
            btn.classList.remove('active');
        });

        /*document.addEventListener("scroll", function (){
            if (window.pageYOffset >= 5) {
                header.classList.add('sticky');
            }
            else {
                header.classList.remove('sticky');
            }
        });*/

        let overlay = document.querySelector('.ask-overlay');
        let askMe = document.querySelectorAll('.askMe');
        let order = document.querySelectorAll('.btn-order');
        let overBlock = document.querySelector('.ask-block');
        let overBlock2 = document.querySelector('.ask-block2');
        let overBlock3 = document.querySelector('.ask-block3');
        let close = document.querySelector('.ask-block-close');
        let close2 = document.querySelector('.ask-block-close2');
        let close3 = document.querySelector('.ask-block-close3');
        let call = document.querySelectorAll('.btn-call');
        let askCall = document.querySelector('.ask-call');
        let askOrder = document.querySelector('.ask-order');
        askMe.forEach(function (item){
            item.addEventListener('click', ()=>{
                overlay.style.display='flex';
            });
        });
        overlay.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overBlock);
            if ( ! withinBoundaries ) {
                overlay.style='display: none';
            }
        });
        close.addEventListener('click', (e) =>{
            overlay.style.display='none';
        });
        close2.addEventListener('click', (e) =>{
            askCall.style.display='none';
        });
        call.forEach(function (item){
            item.addEventListener('click', ()=>{
                askCall.style.display='flex';
            });
        });
        askCall.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overBlock2);
            if ( ! withinBoundaries ) {
                askCall.style='display: none';
            }
        });
        close3.addEventListener('click', (e) =>{
            askOrder.style.display='none';
        });
        order.forEach(function (item){
            item.addEventListener('click', ()=>{
                askOrder.style.display='flex';
            });
        });
        askOrder.addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overBlock3);
            if ( ! withinBoundaries ) {
                askOrder.style='display: none';
            }
        });




        let filter_overlay = document.querySelector('.filter_popup');
        let filter = document.querySelectorAll('.filter');
        let overlay_block = document.querySelector('.filter_popup-content');
        let filter_close = document.querySelector('.filter_popup-closer');
        filter.forEach(function (item){
            item.addEventListener('click', ()=>{
                filter_overlay.classList.add("active");
                overlay_block.classList.add("active");
                document.body.classList.add("active");
            });
        });
        filter_overlay .addEventListener('click', (e) =>{
            const withinBoundaries = e.composedPath().includes(overlay_block);
            if ( ! withinBoundaries ) {
                filter_overlay.classList.remove("active");
                overlay_block.classList.remove("active");
                document.body.classList.remove("active");
            }
        });
        filter_close.addEventListener('click', (e) =>{
            filter_overlay.classList.remove("active");
            overlay_block.classList.remove("active");
            document.body.classList.remove("active");
        });

    });

</script>
