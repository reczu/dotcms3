@extends('admin.layout')

@section('content')
    {!! Form::open(['action' => 'Admin\NewsController@store']) !!}
        <div class="form-group">
            {!! Form::label('title', trans('news_posts.title')) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', trans('news_posts.body')) !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('publish_at', trans('news_posts.publish_at')) !!}
            {!! Form::date('publish_at', null, ['class' => 'form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop