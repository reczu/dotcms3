@extends('admin.layout')

@section('content')
    <h1>{{ trans('news_posts.news_posts_list') }}</h1>
    <hr />

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ trans('news_posts.title') }}</th>
                <th>{{ trans('news_posts.publish_at') }}</th>
                <th>{{ trans('common.actions') }}</th>
            </tr>
        </thead>
        <tbody>
        @foreach($news_posts AS $news_post)
            <tr>
                <td>{{ $news_post->id }}</td>
                <td>{{ $news_post->title }}</td>
                <td>{{ $news_post->publish_at }}</td>
                <td>
                    <a class="btm btn-success btn-xs" role="button" href="{!! action('Admin\NewsController@show', ['news' => $news_post]) !!}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> {{ trans('common.show') }}</a>
                    <a class="btm btn-warning btn-xs" role="button" href="{!! action('Admin\NewsController@edit', ['news' => $news_post]) !!}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{ trans('common.edit') }}</a>
                    <a class="btm btn-danger btn-xs" role="button" href="{!! action('Admin\NewsController@destroy', ['news' => $news_post]) !!}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> {{ trans('common.delete') }}</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav>
    {!! $news_posts->render() !!}
    </nav>
@stop