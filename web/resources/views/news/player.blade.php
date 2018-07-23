@extends('common.layout')

@section('title')
    --球员介绍
@stop

@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/footballer.css') }}" >
@stop
@section('content')
    <div class="outer">
        <div class="inner">
            <div class="footballer_title">
                <div class="country">
                    <img src="{{$team->flag}}"  class="country_flag"/>
                </div>
                <span class="country_name">
                    <a href="{{ url('news/team',['name'=>$player->team]) }}">{{$player->team}}</a>
                    <i>>>球员</i>
                </span>
            </div>
            <div class="footballer_info">
                <div class="top">
                    <div class="left">
                        <div class="img">
                            <img src="{{$player->img}}" />
                        </div>
                        <div class="text">
                            <span>{{$player->name}}</span>
                        </div>
                    </div>
                    <div class="center">
                        <div>
                            球队：
                            <span>{{$player->team}}</span>
                        </div>
                        <div>
                            生日：
                            <span>{{$player->birth}}</span>
                        </div>
                        <div>
                            身高：
                            <span>{{$player->height}}</span>
                        </div>
                    </div>
                    <div class="right">
                        <div>
                            体重：
                            <span>{{$player->weight}}</span>
                        </div>
                        <div>
                            位置：
                            <span>{{$player->position}}</span>
                        </div>
                        <div>
                            球衣号：
                            <span>{{$player->num}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footballer_statistics">
                <div class="statistics_title">技术统计</div>
                <div class="statistics_content">
                    <ul>
                        <li>
                            <div class="sta_top">出场次数</div>
                            <div class="sta_bot">
                                <img src="{{ asset('img/出场次数.png') }}" />
                                <span>{{$player->apperances_counts}}</span>
                            </div>
                        </li>
                        <li>
                            <div class="sta_top">出场总时间（分钟）</div>
                            <div class="sta_bot">
                                <img src="{{ asset('img/出场总时间.png') }}" />
                                <span>{{$player->apperance}}</span>
                            </div>
                        </li>
                        <li>
                            <div class="sta_top">场均出场（分钟）</div>
                            <div class="sta_bot">
                                <img src="{{ asset('img/场均出场.png') }}" />
                                <span>{{$player->average_time}}</span>
                            </div>
                        </li>
                        <li>
                            <div class="sta_top">进球个数</div>
                            <div class="sta_bot">
                                <img src="{{ asset('img/进球个数.png') }}" />
                                <span>{{$player->goal_num}}</span>
                            </div>
                        </li>
                        <li>
                            <div class="sta_top">助攻个数</div>
                            <div class="sta_bot">
                                <img src="{{ asset('img/助攻个数.png') }}" />
                                <span>{{$player->assist_num}}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@stop