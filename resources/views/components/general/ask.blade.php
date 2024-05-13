<div class="ask-overlay">
    <div class="container ask-block">
        <div class="ask-block-close">
        </div>
        <form action="/api/sendMessage" method="post" novalidate class="d-flex flex-column align-items-center justify-content-center form-request" >
            <div class="d-flex flex-column  align-items-center">
                <p class="request">Задать вопрос</p>
            </div>
            <div class="ask-block-long ask-block-fields">
                <div class="d-flex flex-column">
                    <p>Ваше имя *</p>
                    <input name="name" placeholder="Имя" type="text" required="">
                    <div class="icon-container">
                        <div class="icon-user"></div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Телефон *</p>
                    <input name="phone" class="masked" placeholder="Телефон" type="text" required="" inputmode="text" >
                    <div class="icon-container">
                        <div class="icon-phone"></div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Вопрос</p>
                    <input name="ask" id="ask" placeholder="Что вас интересует?" type="text">
                </div>
            </div>
            <div class="ask-block-short ask-block-fields">
                <div class="d-flex">
                    <div class="d-flex flex-column">
                        <p>Ваше имя *</p>
                        <input name="name" placeholder="Имя" type="text" required="">
                        <div class="icon-container">
                            <div class="icon-user"></div>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <p>Телефон *</p>
                        <input name="phone" class="masked" placeholder="Телефон" type="text" required="" inputmode="text">
                        <div class="icon-container">
                            <div class="icon-phone"></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Вопрос</p>
                    <input name="ask" placeholder="Что вас интересует?" type="text">
                </div>
            </div>
            <button class="btn btn-callback">Отправить</button>
            <p class="text-center">Нажимая на кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        document.querySelector(".form-request").addEventListener('submit',(e)=>{
            e.preventDefault();
            let formData = new FormData(e.currentTarget);
            fetch('/api/sendMessage', {
                method: 'POST',
                body: formData,
            }).then(response=>response.json())
                .then(result=>{
                    if (result.status='ok'){
                        console.log('ok')
                    } else {
                        console.log('not ok')
                    }
                })
        })
    })
</script>

<div class="ask-overlay2 ask-call">
    <div class="container ask-block2">
        <div class="ask-block-close2">
        </div>
        <form action="/api/sendMessage" method="post" novalidate class="d-flex flex-column align-items-center justify-content-center form-request">
            <div class="d-flex flex-column">
                <p class="request2">Получите бесплатную консультацию</p>
                <p>Оставьте свои контакты и мы вам перезвоним</p>
            </div>
            <div class="ask-block-fields ask-call-fields d-flex">
                <div class="d-flex flex-column">
                    <p>Ваше имя *</p>
                    <input name="name" placeholder="Имя" type="text" required="">
                    <div class="icon-container">
                        <div class="icon-user"></div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Телефон *</p>
                    <input name="phone" class="masked" placeholder="Телефон" type="text" required="" inputmode="text">
                    <div class="icon-container">
                        <div class="icon-phone"></div>
                    </div>
                </div>
            </div>
            <button class="btn btn-callback">Отправить</button>
            <p class="text-center">Нажимая на кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
        </form>
    </div>
</div>

<div class="ask-overlay3 ask-order">
    <div class="container ask-block3">
        <div class="ask-block-close3">
        </div>
        <form action="/api/sendMessage" method="post" novalidate class="d-flex flex-column align-items-center justify-content-center form-request">
            <div class="d-flex flex-column">
                <p class="request2">Сделать заказ</p>
                <p>Оставьте контактные данные и мы перезвоним вам для уточнения деталей заказа</p>
            </div>
            <div class="ask-block-fields ask-block-fields-buy d-flex flex-column">
                <div class="d-flex flex-column">
                    <p>Ваше имя *</p>
                    <input name="name" placeholder="Имя" type="text" required="">
                    <div class="icon-container">
                        <div class="icon-user"></div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Телефон *</p>
                    <input name="phone" class="masked" placeholder="Телефон" type="text" required="" inputmode="text">
                    <div class="icon-container">
                        <div class="icon-phone"></div>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <p>Вопрос</p>
                    <input name="ask" placeholder="Что нам еще нужно знать?" type="text">
                </div>
            </div>
            <button class="btn btn-callback">Отправить</button>
            <p class="text-center">Нажимая на кнопку, вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
        </form>
    </div>
</div>

<script async="" src="https://cdn-ru.bitrix24.ru/b20057028/crm/site_button/loader_3_h2lfej.js?28461916"></script>

<script>
    (function(w,d,u){
        var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
        var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn-ru.bitrix24.ru/b20057028/crm/site_button/loader_3_h2lfej.js');
</script>

<script>

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

</script>

<script>
    document.addEventListener('DOMContentLoaded', ()=>{
        let masked = document.querySelectorAll('.masked');
        masked.forEach(item=>{
            Inputmask({"mask": "+7 (999) 999 99 99"}).mask(item);
        });

    });
</script>

