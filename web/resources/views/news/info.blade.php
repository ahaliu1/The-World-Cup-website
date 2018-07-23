@extends('common.layout')

@section('title')
    --{{$news->title}}
@stop
@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/news.css') }}" >
@stop
@section('content')
    <!--导航-->
    <div class="lift-nav">
        <ul class="lift">
            <li>菜单</li>
            <li>正文</li>
            <li>评论</li>
        </ul>
    </div>

    <div class="outer">
        <div class="inner">
            <div class="path-search">
                <!--面包屑-->
                <img src="{{ asset('img/logo.jpg') }}"  class="logo-2018"/>
                <div class="channel-path">
                    <a href="{{ url('news/index') }}">首页</a>
                    <span class="span-text">>正文</span>
                </div>
            </div>
            <h1 class="main-title">{{$news->title}}</h1>
            <div class="top-bar">
                <div class="data-source">
                    <span class="date">{{$news->date}}</span>
                    <span class="author">凤凰体育</span>
                </div>
            </div>
            <div class="article-content">
                <!--新闻正文-->
                <?php
                echo "{$news->mainBody}";
                ?>
            </div>
        </div>

        <!--评论-->
        <form action="" method="post" action="">
            {{ csrf_field() }}
        <div class="blk-comment">
            <div class="comment-form">
                <div class="hd-comment">
                    <img src="{{ asset('img/评论.jpg') }}" class="logo-comment" />
                    <span class="hd-title">网友评论</span>
                </div>
                <div class="bd">
                    <div class="editor">
                        <div class="form-inner">
                            <textarea class="box" comment-type="cont" autocomplete="off" placeholder="我有话说..." value action-type="cmnt-box" name="Comment[comment]"></textarea>
                        </div>
                    </div>
                    <div class="user-head">
                        <img src="{{ asset('img/头像.jpg') }}" class="head-img" />
                    </div>

                </div>
                <div class="ft-comment">
                    <button type="submit" class="btns" >发表</button>
                </div>
            </div>

            <!--他人评论-->
            <div class="community">
                <div class="community_title">
                    <span class="community_name">评论社区</span>
                </div>
                <div class="community_list">
                    <!--一条评论-->
                    @foreach($comments as $comment)
                    <div class="community_item">
                        <div class="user-head">
                            <img src="{{ asset('img/头像.jpg') }}" class="head-img" />
                        </div>
                        <div class="community_cont">
                            <div class="user-info">
                                <span class="user_name">游客</span>
                                <span class="user-area">中国</span>
                                <div class="user-txt">{{$comment->comment}}</div>
                                <div class="community_action">
                                    <span class="community_date">{{$comment->created_at}}</span>
                                    <a  href="" class="report">举报</a>
                                    <span class="btns">
                                        <a href="" class="vote">
                                            <img src="{{ asset('img/点赞.jpg') }}" class="vote_img" />
                                            赞
                                            <span class="vote_num">666</span>
                                        </a>
                                 </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </form>
    </div>

@stop

@section('js')
    <script src="{{ asset('JS/jquery1.min.js') }}"></script>
    <script src="{{ asset('JS/LiftEffect.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            LiftEffect({
                "control1": ".lift-nav", 						  //侧栏电梯的容器
                "control2": ".lift",                           //需要遍历的电梯的父元素
                "target": [".header",".main-title",".blk-comment"], //监听的内容，注意一定要从小到大输入
                "current": "current" 						  //选中的样式
            });
        })
    </script>
@stop