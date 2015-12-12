@extends('layout', ['role' => 'client', 'page' => 'place'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Подробная информация о заведении</h4>
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
                    <h2 class="header">{!! $place->name !!}</h2>


                    <div class="row">
                        <form class="col s7" role="form">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" name="place[name]" type="text" value="{!! $place->name !!}"
                                           class="validate" disabled>
                                    <label for="email">Название</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="phones" name="place[phones]" type="text" value="{!! $place->phones !!}"
                                           class="validate" disabled>
                                    <label for="phones">Телефон</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="account" name="place[account]" value="{!! $place->account !!}" type="text"
                                           class="validate" disabled>
                                    <label for="account"># Счета</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="address" name="place[address]" type="text" value="{!! $place->address !!}" class="validate" disabled>
                                    <label for="address">Адрес</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="place[category_id]" disabled>
                                        @foreach($categories as $category)
                                            <option value="{!! $category->id !!}"
                                                    @if($category->id == $place->category_id) selected @endif>{!! $category->name !!}</option>
                                        @endforeach
                                    </select>
                                    <label class="label-dis">Категория</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <select name="place[city_id]" disabled>
                                        @foreach($cities as $city)
                                            <option value="{!! $city->id !!}"
                                                    @if($city->id == $place->city_id) selected @endif>{!! $city->name !!}</option>
                                        @endforeach
                                    </select>
                                    <label class="label-dis">Город</label>
                                </div>
                            </div>
                            <p>
                                <input value="1" type="checkbox" name="place[enabled]" @if($place->enabled == 1) checked
                                       @endif id="test5" disabled/>
                                <label class="label-dis" for="test5">Открыто</label>
                            </p>

                            <div class="row">
                                <a href="{!! url('/place') !!}" class="col offset-s3 s6 waves-effect waves-light btn-large">Назад</a>
                            </div>

                        </form>
                    </div>

                </div>


            </div>
        </div>
    </div>
@endsection