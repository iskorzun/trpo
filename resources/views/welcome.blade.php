<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="https://i.onthe.io/smngoz3qpu18jupp7.9f7b2d18.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://i.onthe.io/smngoz38h7q86f531.c8e846ea.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://i.onthe.io/smngoz7m9bh2tmfjf.c12b6359.png">
    <title>Реферальная система заведений общественного питания</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/login.css') !!}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
</head>
<body class="usecase media">

<header class="  hide " style="background:none;">


    <a href="{!! url('/auth/login') !!}" style="border:solid white 1px; line-height:25px; padding:0 10px; margin:-2px -5px 0 0;">Войти</a>

</header>



<div class="paralax_bg hide">
</div>
<div class="bg_image" id="header">
    <table style="background:none;">
        <tr>
            <td>
                <div class="wrap">
<h1><img src="{!! asset('images/logo.png') !!}"></h1>
                    <h1 class="landing usecase   hide">Реферальная система <br>заведений общественного питания</h1>
                    <h5 class="subtitle   hide">Помогаем значительно расширить вашу клиентскую базу</h5>
                    <br>

                    <a href="{!! url('/auth/register') !!}" id="registration2" class="hide">
                        <button class="trial" onclick="">РЕГИСТРАЦИЯ</button>
                    </a>

                    <br>
                    <br>
                </div>

            </td>
        </tr>
    </table>
</div>


<script src="https://sun.onthe.io/scrollto.js"></script>

<script>

    function checkSite() {
        if (document.querySelector("input.email").value.indexOf("@") != -1 || document.querySelector("input.email").value.indexOf(".") === -1 || document.querySelector("input.email").value.indexOf("google.com") != -1 || document.querySelector("input.email").value.indexOf("facebook.com") != -1) {
            document.querySelector("span.error").classList.add("open");
            setTimeout(function () {
                document.querySelector("span.error").classList.remove("open");
            }, 3000);
        }
        else document.location.href = "?page=create_info_blog&website=" + document.querySelector("input.email").value + '&utm_source=' + '&utm_campaign=';
    }

</script>


<script>

    function launch(e) {
        var hash = document.querySelector(".list-projects").value;
        if (hash == "create")
            window.location = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + "/?page=create";
        else
            window.location = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port : '') + "/?page=app&p=" + hash;
        return false;
    }

    function scrollToTarget(element) {
        var t = document.querySelector("#" + element).offsetTop;
        console.log(t);
        $('body').scrollTo(t);
    }

    document.querySelector(".landing.usecase").classList.remove("hide");
    document.querySelector(".subtitle").classList.remove("hide");
    setTimeout(function () {
        document.querySelector(".usecase.media .paralax_bg").classList.remove("hide");
    }, 500);
    setTimeout(function () {
        document.querySelector("#registration2").classList.remove("hide");
    }, 1000);

    setTimeout(function () {
        document.querySelector("header").classList.remove("hide");
    }, 1600);
    setTimeout(function () {
        document.querySelector(".bg_image .clients_top").classList.remove("hide");
    }, 1600);

    function track(metric) {
        var xhr = new XMLHttpRequest;
        xhr.open('post', '/model.php', true);
        xhr.onreadystatechange = function () {
            if (this.readyState != 4) return;
            if (!this.responseText) return;
            return true;
        }
        var formData = new FormData();
        formData.append("track", metric);
        formData.append("p", 'ReduEKMeX5wcTC9f_L2ZG0ATGnh16WaX');
        xhr.send(formData);
    }

    function get_device_type() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            return "mobile";
        }
        else return "desctop";
    }

    function trackScroll(param) {
        var percent = (param + window.innerHeight) / (document.body.offsetHeight) * 100;
    }

</script>
  