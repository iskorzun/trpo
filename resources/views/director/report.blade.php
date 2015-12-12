@extends('layout', ['role' => 'director', 'page' => 'report'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Управление отчетами</h4>
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
                    <h2 class="header">Отчет о доходах</h2>

                    <div class="row">
                        <form class="col s12" role="form" method="POST" action="{{ route('ref.report.show') }}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col s4">
                                    <input type="date" name="dateFrom" class="datepicker">
                                    <label for="first_name">Дата с</label>
                                </div>
                                <div class="input-field col s4">
                                    <input type="date" name="dateTo" class="datepicker">
                                    <label for="last_name">Дата по</label>
                                </div>
                                <div class="input-field col s2">
                                    <button type="submit" class="waves-effect waves-light btn">Показать</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection