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
<body style="background-color: #f0f4c3;">
<header>
    <div class="container"><a href="#" data-activates="nav-mobile"
                              class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i
                    class="mdi-navigation-menu"></i></a></div>


</header>
<main style="padding-left: 400px; padding-top: 50px;">


    <div class="container">
        <!--  Outer row  -->
        <div class="row">
            <div class="col s12 m10 l10">
                <!--  Material Design -->
                <div id="materialdesign" class="section scrollspy">
                    <h3 class="header">Платежная система WebPay</h3>


                    <div class="row">
                        <div class="col s8" role="form">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="place[name]" type="text" value="{!! $payment['place'] !!}"
                                           class="validate" disabled>
                                    <label for="email">Заведение</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phones" name="place[phones]" type="text" value="{!! $payment['date'] !!}"
                                           class="validate" disabled>
                                    <label for="phones">Дата</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="account" name="place[account]" value="{!! $payment['amount'] !!} руб." type="text"
                                           class="validate" disabled>
                                    <label for="account">Сумма</label>
                                </div>
                            </div>
                            <div class="row">
                                <a href="{!! route('ref.payment.show', ['id' => $payment['id']]) !!}" class="col s5 waves-effect waves-light btn-large">Вернуться на сайт</a>
                                <form id="form" method="POST" action="{!! route('ref.payment.update') !!}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="payment[id]" value="{!! $payment['id'] !!}">
                                    <input type="hidden" name="payment[status]" value="1">

                                    <button onclick="Materialize.toast('Оплата успешно проведена', 5000,'',function(){ $('#form').submit() })" type="submit" class="col offset-s2 s5 waves-effect  btn-large pay-btn">Оплата</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</main>



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
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
</script>
</body>
</html>
