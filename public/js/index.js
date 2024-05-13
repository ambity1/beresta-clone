
/*  document.addEventListener('DOMContentLoaded', ()=> {
      [...document.querySelectorAll('.masked')].forEach(item=>{Inputmask({"mask": "+7 (999) 999 99 99"}).mask(item);});
  )}
*/
document.addEventListener('DOMContentLoaded', ()=>{
    let masked = document.querySelectorAll('.masked');
    masked.forEach(item=>{
        Inputmask({"mask": "+7 (999) 999 99 99"}).mask(item);
    });

});


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

document.addEventListener('DOMContentLoaded', ()=>{

    [...document.querySelectorAll('.recall, .productPage-btn')].forEach(item=>{
        item.addEventListener('click',(e)=>{
            e.preventDefault();
            // document.querySelector('.b24-widget-button-inner-container').dispatchEvent(new Event("click",{bubbles: true, cancelable: false, composed: false}));
            document.querySelector('[data-b24-crm-button-widget="crmform"]').dispatchEvent(new Event("click",{bubbles: true, cancelable: false, composed: false}));
        })
    });
    /*document.querySelector('header .headerCatalog').style.top=document.querySelector('header').offsetHeight+'px';
    document.addEventListener('resize', ()=>{
        document.querySelector('header .headerCatalog').style.top=document.querySelector('header').offsetHeight+'px';
    });*/
});


document.addEventListener('DOMContentLoaded', ()=>{
    const populate = new Swiper('.populate.blade.php-swiper', {
        direction: 'horizontal',
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.populate.blade.php .swiper-button-next',
            prevEl: '.populate.blade.php .swiper-button-prev',
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
        direction: 'horizontal',
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
