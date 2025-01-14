<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
            integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link href="{{asset('css/d.css')}}" rel="stylesheet">
    <title>{{$promotion->name}} | Береста</title>
    <link href="{{asset('font/Montserrat/stylesheet.css')}}" rel="stylesheet">

    <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/inputmask.min.js')}}"></script>
</head>

<body>
@include('headers.desktop.header')
@include('components.general.headerCatalog')
<main>
    @include('components.promotion.contentHeader')
    @include('components.promotion.promotion')
</main>

@include('footers.desktop.footer')
</body>
@include('components.general.ask')
</html>
