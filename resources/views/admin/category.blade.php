@extends('layout', ['role' => 'admin', 'page' => 'category'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Управление категориями</h4>
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
                    <h2 class="header">Категории</h2>

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="name">Название</th>
                            <th data-field="price">Статус</th>
                            <th data-field="price"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>@if($category->enabled == 1) Активна @else Не активна @endif</td>
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