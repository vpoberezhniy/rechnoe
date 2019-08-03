@extends('adminlte::page')

@section('content')

<h1>Протоколы собраний</h1>
<a href="{{url('/admin/protocol/create')}}"><button class="btn btn-info">Добавить протокол</button></a><br><br>


<table id="protocol" class="display table">
    <thead>
    <tr>
        <th>№</th>
        <th>Протокол №</th>
        <th>Тема протокола</th>
        <th>№ Дома</th>
        <th>Описание протокола</th>
        <th>Файл</th>
        <th>Действие</th>
    </tr>
    </thead>
    <tbody>
    @foreach($prtcl as $value)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $value->n_protocol }}</td>
            <td>{{ $value->theme }}</td>
            <td>{{ $value->house_number }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->file }}</td>
            <td><a href="{{url('/admin/protocol/' . $value->id . '/edit')}}" ><button class="btn btn-info">Edit</button></a>
                {!!Form::open(['url'=>'admin/protocol/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
                {!!Form::submit('Delete', ['class'=>'btn btn-danger'])  !!}
                {!!Form::close()!!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#protocol').DataTable();
        } );
    </script>
@endsection