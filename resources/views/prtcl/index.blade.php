@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="col-md-12 granica">
                    <h3>Протоколы правления OSBB "Речное"</h3>

                    <table id="protocol" class="display table">
                        <thead>
                        <tr>
                            <th>Протокол №</th>
                            <th>Тема протокола</th>
                            <th>№ Дома</th>
                            <th>Файл</th>
                            <th>Дата</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prtcl as $value)
{{--                            {{dd($value)}}--}}
                             <tr>
                                <td>{{ $value->n_protocol }}</td>
                                <td>{{ $value->theme }}</td>
{{--                                <td>{{ $value->house->name}}</td>--}}
                                <td><a href="{{ $value->file}}">Просмотр файла</a></td>
                                <td>{{ $value->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-md-3 granica">
                <ul class="list-group">

                    @foreach($house as $value)
    {{--{{dd($value->protocol->count())}}--}}
                        <a href="{{url('/prtcl/'.$value->id)}}"
                           class="list-group-item list-group-item-action
                            {{Request::is('/prtcl/' . $value->id)?'active':''}}">
                            {{$value->name}}</a>
                        {{--<span class="badge badge-pill">{{$value->protocol-> count()}}</span></a>--}}
                    @endforeach

                {{--<button class="btn btn-primary button_menu" >Создать новый пост</button><br>--}}
                {{--<button class="btn btn-primary button_menu">Создать новое предложение</button><br>--}}
                {{--<button class="btn btn-primary button_menu">Создать новую претензию</button><br>--}}
                {{--<button class="btn btn-primary button_menu">Создать новое объявление</button><br>--}}
                {{--<button class="btn btn-primary button_menu">Кнопка №5</button>--}}
                {{--<hr />--}}
                {{--<h4 class="topten_otstup">Топ-10 постов</h4>--}}
                </ul>
            </div>

        </div>


    </div>

@endsection

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ url('/js/dropzone.js') }}"></script>
    <script src="{{ url('/js/dropzone-config.js') }}"></script>
    @stack('js')
    @yield('js')
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#protocol').DataTable();
        } );
    </script>
@endsection