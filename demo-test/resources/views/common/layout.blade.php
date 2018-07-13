<!DOCTYPE html>
<html>
<head>
    <title>世界杯新闻   @yield('title')</title>
    <link rel="stylesheet"  href="{{ asset('CSS/style.css') }}" >
@yield('style')
</head>

<body>
<!-- 头部 -->
@section('header')
    <header class="header">
        <img src="{{ asset('img/header2.jpg') }}" class="logo" />
        <ul class="menu">
            <li class="{{ Request::getPathInfo() == '/news/index' ? 'current' : '' }}"><a href="{{ url('news/index') }}">首页</a></li>
            <li class="{{ Request::getPathInfo() == '/news/shot' ? 'current' : '' }}"><a href="{{ url('news/shot') }}">射手</a></li>
            <li class="{{ Request::getPathInfo() == '/news/score' ? 'current' : '' }}"><a href="{{ url('news/score') }}">积分</a></li>
            <li class="{{ Request::getPathInfo() == '/news/schedule' ? 'current' : '' }}"><a href="{{ url('news/schedule') }}">赛程</a></li>
            <li class="{{ Request::getPathInfo() == '/news/team/乌拉圭' ? 'current' : '' }}"><a href="{{ url('news/team/乌拉圭') }}">球队</a></li>
            <li class="{{ Request::getPathInfo() == '/news/intro' ? 'current' : '' }}"><a href="{{ url('news/intro') }}">简介</a></li>
        </ul>
        <hr />
    </header>
@show
<!-- 中间内容区局 -->
<div class="outer">
    @yield('content')
</div>
<!--尾部-->
@section('footer')
    <div class="footer">
        <hr />
        <div class="footer-inner">
            <p><a href="">新闻中心</a></p>
            <p><a href="">简介</a>
                |
                <a href="">联系我们</a>
                |
                <a href="">产品答疑</a>
            </p>
            <p>2016级国软实训</p>
        </div>
    </div>
@show
</body>
@yield('js')
</html>