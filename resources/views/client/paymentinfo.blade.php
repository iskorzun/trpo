@extends('layout', ['role' => 'client', 'page' => 'payment'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Управление счетами</h4>
                </div>
                <div class="col s2">
                    <a class="right" href="{!! url('/auth/logout') !!}"><i
                                class="logout-icon material-icons dp48">input</i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!--  Outer row  -->
        <div class="row">

            <div class="col s12 m10 l10">
                <!--  Material Design -->
                <div id="materialdesign" class="section scrollspy">
                    <h2 class="header">Информация о счете</h2>


                    <div class="row">
                        <div class="col s7" role="form">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="place[name]" type="text" value="@if($payment->place){!! $payment->place->name  !!} @endif"
                                           class="validate" disabled>
                                    <label for="email">Заведение</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phones" name="place[phones]" type="text" value="@if($payment->date){!! rus_date("j F Y H:i ", strtotime($payment->date)) !!} @endif"
                                           class="validate" disabled>
                                    <label for="phones">Дата</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea" disabled>@foreach ($sales as $key => $sale)@if(++$key > 1){!!  PHP_EOL  !!}@endif{!! $sale->product->info->description !!} - {!! $sale->price !!} руб.@endforeach</textarea>
                                    <label for="textarea1">Информация о заказе</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="account" name="place[account]" value="{!! $payment->amount !!} руб." type="text"
                                           class="validate" disabled>
                                    <label for="account">Сумма</label>
                                </div>
                            </div>
                            <div class="row">
                                <a href="{!! url('/payment') !!}" class="col s5 waves-effect waves-light btn-large">Назад</a>
                                <form method="POST" action="{!! route('ref.payment.pay') !!}">
                                    {!! csrf_field() !!}
                                    <input type="hidden" name="payment[amount]" value="{!! $payment->amount !!}">
                                    <input type="hidden" name="payment[place]" value="@if($payment->place){!! $payment->place->name  !!} @endif">
                                    <input type="hidden" name="payment[date]" value="@if($payment->date){!! rus_date("j F Y H:i ", strtotime($payment->date)) !!} @endif">
                                    <input type="hidden" name="payment[id]" value="{!! $payment->id !!}">

                                    <button type="submit" class="col offset-s2 s5 waves-effect waves-light btn-large pay-btn">Оплатить</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <?
    function rus_date() {
// Перевод
        $translate = array(
                "am" => "дп",
                "pm" => "пп",
                "AM" => "ДП",
                "PM" => "ПП",
                "Monday" => "Понедельник",
                "Mon" => "Пн",
                "Tuesday" => "Вторник",
                "Tue" => "Вт",
                "Wednesday" => "Среда",
                "Wed" => "Ср",
                "Thursday" => "Четверг",
                "Thu" => "Чт",
                "Friday" => "Пятница",
                "Fri" => "Пт",
                "Saturday" => "Суббота",
                "Sat" => "Сб",
                "Sunday" => "Воскресенье",
                "Sun" => "Вс",
                "January" => "Января",
                "Jan" => "Янв",
                "February" => "Февраля",
                "Feb" => "Фев",
                "March" => "Марта",
                "Mar" => "Мар",
                "April" => "Апреля",
                "Apr" => "Апр",
                "May" => "Мая",
                "June" => "Июня",
                "Jun" => "Июн",
                "July" => "Июля",
                "Jul" => "Июл",
                "August" => "Августа",
                "Aug" => "Авг",
                "September" => "Сентября",
                "Sep" => "Сен",
                "October" => "Октября",
                "Oct" => "Окт",
                "November" => "Ноября",
                "Nov" => "Ноя",
                "December" => "Декабря",
                "Dec" => "Дек",
                "st" => "ое",
                "nd" => "ое",
                "rd" => "е",
                "th" => "ое"
        );
        // если передали дату, то переводим ее
        if (func_num_args() > 1) {
            $timestamp = func_get_arg(1);
            return strtr(date(func_get_arg(0), $timestamp), $translate);
        } else {
// иначе текущую дату
            return strtr(date(func_get_arg(0)), $translate);
        }
    }
    ?>
@endsection