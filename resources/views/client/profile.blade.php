@extends('layout', ['role' => 'client', 'page' => 'profile'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Редактирование профиля</h4>
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
                    <h2 class="header">Профиль</h2>


                    <div class="row">
                        <form id="form" class="col s7" role="form" method="POST" action="{{ route('ref.profile.update', ['id' => $user->id]) }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="user[name]" type="text" value="{!! $user->name !!}"
                                           class="validate">
                                    <label for="email">Название</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phones" name="user[email]" type="text" value="{!! $user->email !!}"
                                           class="validate">
                                    <label for="phones">Телефон</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="account" name="user[account]" value="{!! $user->account !!}" type="text"
                                           class="validate">
                                    <label for="account"># Счета</label>
                                </div>
                            </div>
                            <p>
                                <input name="user[gender]" value="1" type="radio" id="test1" @if($user->gender == 1) checked @endif  />
                                <label for="test1">Мужчина</label>
                            </p>
                            <p>
                                <input name="user[gender]" value="2" type="radio" @if($user->gender == 2) checked @endif  id="test2" />
                                <label for="test2">Женщина</label>
                            </p>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="birthday" value="@if($user->birthday){!! rus_date("j F, Y", strtotime($user->birthday)) !!} @endif" type="date" name="user[birthday]" class="datepicker">
                                    <label for="birthday">Дата рождения</label>
                                </div>
                            </div>

                            <p>
                                <input value="1" type="checkbox" name="user[confirmed]"
                                       @if($user->confirmed == 1) checked @endif id="test5"/>
                                <label for="test5">Активен</label>
                            </p>

                            <div class="row">
                                <a onclick="Materialize.toast('Профиль успешно обновлен', 2000,'',function(){ $('#form').submit() })" class="col offset-s3 s6 waves-effect waves-light btn-large">Сохранить</a>
                            </div>

                        </form>
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