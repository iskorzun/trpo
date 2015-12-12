<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Реферальная система</title>

    <!-- CSS-->
    <link rel="stylesheet" href="{!! asset('css/materialize.custom.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
    <div class="container"><a href="#" data-activates="nav-mobile"
                              class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i
                    class="mdi-navigation-menu"></i></a></div>
    <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="{!! url('/main') !!}" class="brand-logo">
                <img class="logo-img" src="{!! asset('images/logo.png') !!}"></a></li>

        @if($role == 'admin')
            <li class="bold @if($page == 'user') active @endif"><a href="{!! url('/user') !!}" class="waves-effect waves-teal">Пользователи</a></li>
            <li class="bold @if($page == 'city') active @endif"><a href="{!! url('/city') !!}" class="waves-effect waves-teal">Города</a></li>
            <li class="bold @if($page == 'category') active @endif"><a href="{!! url('/category') !!}"
                                class="waves-effect waves-teal">Категории</a>
            </li>
        @endif

        @if($role == 'client')
            <li class="bold @if($page == 'place') active @endif"><a href="{!! url('/place') !!}" class="waves-effect waves-teal">Заведения</a></li>
            <li class="bold @if($page == 'profile') active @endif"><a href="{!! url('/profile') !!}" class="waves-effect waves-teal">Профиль</a></li>
            <li class="bold @if($page == 'payment') active @endif"><a href="{!! url('/payment') !!}" class="waves-effect waves-teal">Оплата<span class="badge"></span></a></li>
        @endif

        @if($role == 'director')
            <li class="bold @if($page == 'report') active @endif"><a href="{!! url('/report') !!}" class="waves-effect waves-teal">Отчеты</a></li>
        @endif

    </ul>

</header>
<main>
    @yield('content')
</main>

<footer class="page-footer">

    <div class="footer-copyright">
        <div class="container">
            RODICHEV © 2015
        </div>
    </div>
</footer>

<!--  Scripts-->

<script src="{!! asset('js/jquery.min.js') !!}"></script>

{{--<script src="http://materializecss.com/js/jquery.timeago.min.js"></script>--}}
{{--<script src="http://materializecss.com/js/prism.js"></script>--}}
{{--<script src="http://materializecss.com/jade/lunr.min.js"></script>--}}
{{--<script src="http://materializecss.com/jade/search.js"></script>--}}
<script src="{!! asset('js/materialize.min.js') !!}"></script>
{{--<script src="http://materializecss.com/js/init.js"></script>--}}
<script>
    $(document).ready(function() {
        $('select').material_select();

        $('#textarea1').trigger('autoresize');

        $('.datepicker').pickadate({
            monthsFull: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
            weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
            formatSubmit: 'yyyy-mm-dd',
            selectMonths: true,
            selectYears: 15
        });
    });
</script>
</body>
</html>