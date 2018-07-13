@extends('common.layout')

@section('title')
    --赛程
@stop
@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/schedule.css') }}" >
@stop

@section('content')
<div class="outer">
    <div class="inner">
        <ul class="calendar_title">
            <li>
                <spam>Monday</spam>
            </li>
            <li>
                <span>Tuesday</span>
            </li>
            <li>
                <span>Wednesday</span>
            </li>
            <li>
                <span>Thursday</span>
            </li>
            <li>
                <span>Friday</span>
            </li>
            <li>
                <span>Saturday</span>
            </li>
            <li>
                <span>Sunday</span>
            </li>
        </ul>
        <div class="calendar_box">
            <!--一个星期-->
            <div>
                <!--日期-->
                <ul class="date">
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>6月14日</li>
                    <li>6月15日</li>
                    <li>6月16日</li>
                    <li>6月17日</li>
                </ul>
                <!--赛程-->
                <ul class="list">
                    <!--无赛程的日期-->
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <!--有赛程的日期-->
                    <li>
                        <!--每一场-->
                        <p>23:00<br />俄罗斯 5-0 沙特阿拉伯</p>
                    </li>
                    <li>
                        <!--每一场-->
                        <p>20:00<br />埃及 0-1 乌拉圭<br>
                        23:00<br />摩洛哥 0-1 伊朗</p>
                    </li>
                    <li>
                        <!--每一场-->
                        <p>02:00<br>葡萄牙 3-3 西班牙<br>
                        18:00<br>法国 2-1 澳大利亚<br>
                        21:00<br>阿根廷 1-1 冰岛</p>
                    </li>
                    <li>
                        <!--每一场-->
                        <p>00:00<br>秘鲁 0-1 丹麦<br>
                           02:00<br>克罗地亚 2-0 尼日利亚<br>
                           20:00<br>哥斯达黎加0-1塞尔维亚<br>
                           23:00<br>德国 0-1 墨西哥</p>
                    </li>
                </ul>
            </div>
            <!--一个星期-->
            <div>
                <!--日期-->
                <ul class="date">
                    @for($i=0;$i<=6;$i++)
                    <li>{{$group1[$i]}}</li>
                    @endfor
                </ul>
                <!--赛程-->
                <ul class="list">
                    @for($i=0;$i<=6;$i++)
                    <li>
                        <p> @foreach($schedule1[$i] as $schedule)
                       {{$schedule->time}}<br>{{$schedule->game}}<br>
                        @endforeach
                        </p>
                    </li>
                    @endfor
                </ul>
            </div>
            <!--一个星期-->
            <div>
                <!--日期-->
                <ul class="date">
                    @for($i=0;$i<=6;$i++)
                        <li>{{$group2[$i]}}</li>
                    @endfor
                </ul>
                <!--赛程-->
                <ul class="list">
                    @for($i=0;$i<=6;$i++)
                        <li>
                            <p> @foreach($schedule2[$i] as $schedule)
                                    {{$schedule->time}}<br>{{$schedule->game}}<br>
                                @endforeach
                            </p>
                        </li>
                    @endfor
                </ul>
            </div>
            <!--一个星期-->
            <div>
                <!--日期-->
                <ul class="date">
                    @for($i=0;$i<=6;$i++)
                        <li>{{$group3[$i]}}</li>
                    @endfor
                </ul>
                <!--赛程-->
                <ul class="list">
                    @for($i=0;$i<=6;$i++)
                        <li>
                            <p> @foreach($schedule3[$i] as $schedule)
                                    {{$schedule->time}}<br>{{$schedule->game}}<br>
                                @endforeach
                            </p>
                        </li>
                    @endfor
                </ul>
            </div>
            <!--一个星期-->
            <div>
                <!--日期-->
                <ul class="date">
                    <li>7月9日</li>
                    <li>7月10日</li>
                    <li>7月11日</li>
                    <li>7月12日</li>
                    <li>7月13日</li>
                    <li>7月14日</li>
                    <li>7月15日</li>
                </ul>
                <!--赛程-->
                <ul class="list">
                    <!--无赛程的日期-->
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <!--有赛程的日期-->
                    <li>
                        <!--每一场-->
                        <p>02:00<br>法国 1-0 比利时</p>
                    </li>
                    <li>
                        <!--每一场-->
                        <p>02:00<br />克罗地亚 2-1 英格兰</p>
                    </li>
                    <li>&nbsp;</li>
                    <li>
                        <p>22:00<br />比利时 0-0 英格兰</p>
                    </li>
                    <li><p>23:00<br />法国 0-0 克罗地亚</p></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@stop