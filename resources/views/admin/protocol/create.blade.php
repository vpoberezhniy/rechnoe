@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
@stop

@section('title')
    Protocol
@endsection
@section('content_header')
    <h1>Добавление нового протокола</h1>
    <hr />
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
        @if(!$prtcl->n_protocol)
            {!! Form::model($prtcl, ['route' => ['protocol.store'], 'files' => true, 'class'=>'form-horizontal'  ]) !!}
        @else
            {!! Form::model($prtcl, ['route' => ['protocol.update', $prtcl->id], 'files' => true, 'method'=>'PUT', 'class'=>'form-horizontal'  ]) !!}
        @endif
        <div class="form-group">
            {!! Form::label('n_protocol', '№ Протокола:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::text('n_protocol', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('theme', 'Тема:', ['class'=>'control-label col-sm-3']); !!}
            <div class="col-sm-9">
                {!! Form::text('theme', null, ['class'=>'form-control']) !!}
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('role', 'house_number:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::select('house_number', $houses, ['class'=>'form-control', 'multiple'=>true]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Описание протокола:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::text('description', null, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('file', 'Load file:', ['class'=>'control-label col-sm-3']); !!}
                <div class="col-sm-9">
                    {!! Form::file('file', null, ['class'=>'form-control']) !!}
                    {!! Form::text('file', $prtcl->file, null, ['class'=>'control-label col-sm-3']); !!}
                </div>
            </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                {!! Form::submit('Сохранить протокол', ['class'=>'btn btn-info']) !!}
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@endsection
@section('js')
    <script>$("#role").select2();</script>
@stop