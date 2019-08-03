@extends('adminlte::page')

@section('title')
    Users
@endsection
@section('content_header')
    <h1>Users table</h1>
@stop

@section('content')
    <a href="{{url('/admin/user/create')}}"><button class="btn btn-info">Создать нового пользователя</button></a><br><br>

    <table id="user" class="display table">
        <thead>
        <tr>
            <th>№</th>
            <th>First name</th>
            <th>E-Mail</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
            @foreach($user as $value)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td><a href="{{url('/admin/user/' . $value->id . '/edit')}}" ><button class="btn btn-info">Edit</button></a>
                {!!Form::open(['url'=>'admin/user/'.$value->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
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
$('#user').DataTable();
} );
    </script>
    @endsection