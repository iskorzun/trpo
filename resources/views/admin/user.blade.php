@extends('layout', ['role' => 'admin', 'page' => 'user'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Управление пользователями</h4>
                </div>
                <div class="col s2">
                    <a class="right" href="{!! url('/auth/logout') !!}"><i class="logout-icon material-icons dp48">input</i></a>
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
                    <h2 class="header">Пользователи</h2>

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="name">Email</th>
                            <th data-field="price">Имя</th>
                            <th data-field="price">Дата рождения</th>
                            <th data-field="price">Пол</th>
                            <th data-field="price"># Счета</th>
                            <th data-field="price"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->name }}</td>
                                <td>@if($user->birthday) {{ $user->birthday->format('F j, Y') }}@endif</td>
                                <td>@if($user->gender == 1) Мужской @else Женский @endif</td>
                                <td>{{ $user->account }}</td>
                                <td><a class="waves-effect waves-light btn">Подробнее</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>
@endsection