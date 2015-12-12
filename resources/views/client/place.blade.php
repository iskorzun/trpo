@extends('layout', ['role' => 'client', 'page' => 'place'])

@section('content')
    <div class="section" id="index-banner">
        <div class="container">
            <div class="row">
                <div class="col s10">
                    <h4 class="header center-on-small-only">Информация о заведениях</h4>
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
                    <h2 class="header">Заведения</h2>

                    <table class="highlight">
                        <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="name">Название</th>
                            <th data-field="price">Категория</th>
                            <th data-field="price">Город</th>
                            <th data-field="price">Статус</th>
                            <th data-field="price"></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($places as $place)
                            <tr>
                                <td>{{ $place->id }}</td>
                                <td>{{ $place->name }}</td>
                                <td>@if($place->category){!! $place->category->name  !!} @endif</td>
                                <td>@if($place->city){!! $place->city->name  !!} @endif</td>
                                <td>@if($place->enabled == 1) Открыто @else Закрыто @endif</td>
                                <td><a href="{!! route('ref.place.show', ['id' => $place->id]) !!}" class="waves-effect waves-light btn">Подробнее</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>
@endsection