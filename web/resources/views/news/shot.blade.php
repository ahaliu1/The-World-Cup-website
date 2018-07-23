@extends('common.layout')

@section('title')
    --射手榜
@stop
@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/shooter.css') }}" >
@stop
@section('content')
    <div class="outer">
        <div class="inner">
            <ul class="title">
                <li class="lw_130">排名</li>
                <li class="lw_170">球员</li>
                <li class="lw_130">位置</li>
                <li class="lw_170">球队</li>
                <li class="lw_130">进球</li>
                <li class="lw_170">助攻</li>
            </ul>
            <div class="shooter">
            @foreach($shots as $shot)
                <!--一行-->
                <ul class="ss_list">
                    <li class=" lw_130" style="background-color:rgb(251,251,251);  ">
                        <span class="ranking">{{ $shot->rank }}</span>
                    </li>
                    <li class="lw_170" style="text-align:left;">
                    <span class="photo">
                        <img src="{{ $shot->player_img }}" class="photo-img" />
                    </span>
                        <a href="{{ url('news/player', ['id' => $shot->id]) }}" target="_blank"><span class="name">{{ $shot->player_name}}</span></a>
                    </li>
                    <li class=" lw_130" style="background-color:rgb(251,251,251);">
                        <span  class="position">{{ $shot->position }}</span>
                    </li>
                    <li class="lw_170" style="text-align:left;">
                        <span class="flag">
                            <img src="{{ $shot->country_flag }}" class="flag-img" />
                        </span>
                        <span class="teamname"><a href="{{ url('news/team', ['name' => $shot->country]) }}" target="_blank">{{ $shot->country }}</a></span>
                    </li>
                    <li class=" lw_130" style="background-color:rgb(251,251,251);">
                        <span class="goalnum">{{ $shot->goals }}</span>
                    </li>
                    <li class="lw_170" style="text-align:left;">
                        <span class="flag"></span>
                        <span class="assistnum">{{ $shot->assist }}</span>
                    </li>
                </ul>
                @endforeach
            </div>
        </div>
    </div>

@stop



