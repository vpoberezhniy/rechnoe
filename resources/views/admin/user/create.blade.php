@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
@stop

@section('title')
    Users
@endsection
@section('content_header')
    <h1>Create New User</h1>
@stop

@section('content')

        <div class="col-md-8 col-md-offset-2">

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(!$user->name)
                {!! Form::model($user, ['route' => ['users.store'], 'class'=>'form-horizontal'  ]) !!}
            @else
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PUT', 'class'=>'form-horizontal'  ]) !!}
            @endif
        <div class="form-group">
            {!! Form::label('name', 'User Name:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::email('email', null, ['class'=>'form-control']) !!}
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::password('password', ['class'=>'form-control']) !!}
                </div>
            </div>
        <div class="form-group">
            {!! Form::label('pswd', 'Repead Password:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::password('pswd', ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('role', 'Role:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::select('role', $roles, $default_role->id, ['class'=>'form-control', 'multiple'=>true]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                {!! Form::submit('Save new user in base', ['class'=>'btn btn-info']) !!}
            </div>
        </div>

    {!! Form::close() !!}
        </div>

@endsection
@section('js')
    <script>$("#role").select2();</script>
@stop