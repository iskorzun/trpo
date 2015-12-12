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
                    <h2 class="header">Счета</h2>

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="name">Заведение</th>
                            <th data-field="price">Дата</th>
                            <th data-field="price">Сумма</th>
                            <th data-field="price">Статус</th>
                            <th data-field="price"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($payments as $key=>$payment)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>@if($payment->place){!! $payment->place->name  !!} @endif</td>
                                <td>@if($payment->date){!! rus_date("j F Y H:i ", strtotime($payment->date)) !!} @endif</td>
                                <td>{{ $payment->amount }} руб.</td>
                                <td>@if($payment->payment_date) Оплачено @else Не оплачено @endif</td>
                                <td>@if($payment->payment_date)  @else
                                        <a href="{!! route('ref.payment.show', ['id' => $payment->id]) !!}"
                                           class="waves-effect waves-light btn">Подробнее</a>
                                    @endif</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

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