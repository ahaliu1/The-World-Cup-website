@extends('common.layout')

@section('title')
    --明星球员介绍
@stop

@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/football_star.css') }}" >
@stop
@section('content')

    <div class="outer">
            <div class="inner">
                <div class="footballer_title">
                    <div class="country">
                        <img src="{{$team->flag}}" class="country_flag" />
                    </div>
                    <span class="country_name">
                    <a href="{{ url('news/team',['name'=>$player->team]) }}">{{$player->team}}</a>
                    <i>>>明星球员</i>
                </span>
                </div>
                <div class="top">
                    <div class="left">
                        <div class="left_info">
                            <div class="name">
                                <h3 id="playername">{{$player->name}}</h3>
                            </div>
                            <div class="brief">
                                <ul>
                                    <li>
                                        <span class="item">球队：</span>
                                        <span class="val">{{$player->team}}</span>
                                    </li>
                                    <li>
                                        <span class="item">出生日期：</span>
                                        <span class="val">{{$player->birth}}</span>
                                    </li>
                                    <li>
                                        <span class="item">身高：</span>
                                        <span class="val">{{$player->height}}</span>
                                    </li>
                                    <li>
                                        <span class="item">体重：</span>
                                        <span class="val">{{$player->weight}}</span>
                                    </li>
                                    <li>
                                        <span class="item">球衣号：</span>
                                        <span class="val">{{$player->num}}</span>
                                    </li>
                                    <li>
                                        <span class="item">场上位置：</span>
                                        <span class="val">{{$player->position}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="star">
                            <img src="{{$player->img}}"/>
                        </div>
                    </div>
                </div>
                <div class="bottom">
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

        </div>

@stop