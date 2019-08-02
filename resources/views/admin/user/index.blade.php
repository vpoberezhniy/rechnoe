@extends('adminlte::page')

@section('title')
    Users
@endsection
@section('content_header')
    <h1>Users table</h1>
@stop

@section('content')
    <a href="{{url('/admin/users/create')}}"><button class="btn btn-info">Create New User</button></a><br><br>

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
            @foreach($users as $user)

        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{url('/admin/users/' . $user->id . '/edit')}}" ><buttor class="btn btn-info">Edit</buttor></a>
                {!!Form::open(['url'=>'admin/users/'.$user->id,'method'=>'DELETE', 'style'=>'display:inline'])!!}
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