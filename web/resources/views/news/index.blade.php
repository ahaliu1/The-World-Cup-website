@extends('common.layout')

@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/index.css') }}" >
@stop
    @section('content')
    <div class="inner">
        <!-- 循环输出新闻 -->
        @foreach($newss as $news)
        <div class="news-list-item">
            <div class ="author-time">
                <span>凤凰体育</span>发表于<span>{{$news->date}}</span>
            </div>
            <div class="news-des">
                <h3 class="news-title"><a href="{{ url('news/info', ['id' => $news->id]) }}">
                        {{$news->title}}</a>
                </h3>
                <div class="news-content">
                    <img src="{{$news->firstPicture}}" class="news-img"/>
                    <div class="news-content-des">
                        <a href="{{ url('news/info', ['id' => $news->id]) }}">
                            {{$news->abstract}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{ $newss->render() }}
        </div>

    </div>

@stop