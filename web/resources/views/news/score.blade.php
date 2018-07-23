@extends('common.layout')

@section('title')
    --积分榜
@stop
@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/score.css') }}" >
@stop
@section('content')
    <div class="outer">
        <div class="inner">
            <div class="score">

                <!--每一组-->
                @for($i=0; $i<=7;$i++)
                <div class="team">
                    <div class="team_name">{{$group[$i]}}</div>
                    <ul class="team_title">
                        <li>排名</li>
                        <li>球队</li>
                        <li>胜/平/负</li>
                        <li>进球</li>
                        <li>失球</li>
                        <li>积分</li>
                    </ul>
                    @foreach($scores[$i] as $score)
                    <div class="team_info">
                        @if($score->rank %2 == 1 )
                            <ul class="info_list">
                                <li class="rank">{{$score->rank}}</li>
                                <a href="{{ url('news/team', ['name' => $score->team]) }}" target="_blank"><li class="name">{{$score->team}}</li></a>
                                <li>{{$score->w_t_l}}</li>
                                <li class="goalnum">{{$score->goals}}</li>
                                <li class="lostnum">{{$score->fumble}}</li>
                                <li class="team_score">{{$score->points}}</li>
                            </ul>
                            @else
                            <ul class="info_list" style="background:rgb(230,230,250);">
                                <li class="rank">{{$score->rank}}</li>
                                <a href="{{ url('news/team', ['name' => $score->team]) }}" target="_blank"><li class="name">{{$score->team}}</li></a>
                                <li>{{$score->w_t_l}}</li>
                                <li class="goalnum">{{$score->goals}}</li>
                                <li class="lostnum">{{$score->fumble}}</li>
                                <li class="team_score">{{$score->points}}</li>
                            </ul>
                            @endif
                    </div>
                    @endforeach
                </div>
            @endfor
            </div>
        </div>
    </div>
@stop



