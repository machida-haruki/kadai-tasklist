@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">

        {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        <div class="form-group">

            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        
        </div>


        <div class="form-group">
        
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>

            {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

        </div>
    </div>

@endsection