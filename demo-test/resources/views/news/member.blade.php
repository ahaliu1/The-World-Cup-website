@extends('common.layout')

@section('title')
    --球队介绍
@stop

@section('style')
    <link rel="stylesheet"  href="{{ asset('CSS/info.css') }}" >
@stop
@section('content')
    <div class="outer">
        <div class="inner">
            <!--球队及阵容信息-->
            <div class="info_box">
                <ul class="info_menu">
                    <li value="1"><a href="#info_1" >球队</a></li>
                    <li value="2"><a href="#info_2">阵容</a></li>
                </ul>
                <div class="info_content">
                    <!--球队-->
                    <div id="info_1">
                        <img src="{{$te->flag}}" class="info_flag"/>
                        <p class="info_txt">
                            {{$te->introduction}}
                        </p>
                    </div>
                    <div id="info_2">
                    @for($i=0; $i<=3;$i++)
                        <!--门将-->
                        <div class="info2_txt">
                            <h3>{{$group[$i]}}</h3>
                            <p>
                            @foreach($members[$i] as $member)
                            {{$member->name}}、
                            @endforeach
                            </p>
                        </div>
                      @endfor
                    </div>
                </div>
            </div>
            <!--国家表-->
            <div class="country_box">
                <ul class="country_menu">
                    <li>国家</li>
                </ul>
                <dl>
                    <dt>A组</dt>
                    @for($j=0;$j<+3;$j+=2)
                        <dd>
                            <a value="{{$team1[$j]->team}}" href="{{ url('news/team',['name'=>$team1[$j]->team]) }}">{{$team1[$j]->team}}</a>
                            <a value="{{$team1[$j+1]->team}}" href="{{ url('news/team',['name'=>$team1[$j+1]->team]) }}">{{$team1[$j+1]->team}}</a>
                        </dd>
                    @endfor
                </dl>
                <dl>
                    <dt>B组</dt>
                    <dd>
                        <a value="葡萄牙" href="{{ url('news/team/葡萄牙') }}">葡萄牙</a>
                        <a value="西班牙" href="{{ url('news/team/西班牙') }}">西班牙</a>
                    </dd>
                    <dd>
                        <a value="摩洛哥" href="{{ url('news/team/摩洛哥') }}">摩洛哥</a>
                        <a value="伊朗" href="{{ url('news/team/伊朗') }}">伊朗</a>
                    </dd>
                </dl>
                <dl>
                    <dt>C组</dt>
                    <dd>
                        <a value="法国" href="{{ url('news/team/法国') }}">法国</a>
                        <a value="澳大利亚" href="{{ url('news/team/澳大利亚') }}">澳大利亚</a>
                    </dd>
                    <dd>
                        <a value="埃及" href="{{ url('news/team/埃及') }}">埃及</a>
                        <a value="乌拉圭" href="{{ url('news/team/乌拉圭') }}">乌拉圭</a>
                    </dd>
                </dl>
                <dl>
                    <dt>D组</dt>
                    <dd>
                        <a value="阿根廷" href="{{ url('news/team/阿根廷') }}">阿根廷</a>
                        <a value="冰岛" href="{{ url('news/team/冰岛') }}">冰岛</a>
                    </dd>
                    <dd>
                        <a value="克罗地亚" href="{{ url('news/team/克罗地亚') }}">克罗地亚</a>
                        <a value="尼日利亚" href="{{ url('news/team/尼日利亚') }}">尼日利亚</a>
                    </dd>
                </dl>
                <dl>
                    <dt>E组</dt>
                    <dd>
                        <a value="巴西" href="{{ url('news/team/巴西') }}">巴西</a>
                        <a value="瑞士" href="{{ url('news/team/瑞士') }}">瑞士</a>
                    </dd>
                    <dd>
                        <a value="哥斯达黎加" href="{{ url('news/team/哥斯达黎加') }}">哥斯达黎加</a>
                        <a value="塞尔维亚" href="{{ url('news/team/塞尔维亚') }}">塞尔维亚</a>
                    </dd>
                </dl>
                <dl>
                    <dt>F组</dt>
                    <dd>
                        <a value="德国" href="{{ url('news/team/德国') }}">德国</a>
                        <a value="墨西哥" href="{{ url('news/team/墨西哥') }}">墨西哥</a>
                    </dd>
                    <dd>
                        <a value="瑞典" href="{{ url('news/team/瑞典') }}">瑞典</a>
                        <a value="韩国" href="{{ url('news/team/韩国') }}">韩国</a>
                    </dd>
                </dl>
                <dl>
                    <dt>G组</dt>
                    <dd>
                        <a value="比利时" href="{{ url('news/team/比利时') }}">比利时</a>
                        <a value="巴拿马" href="{{ url('news/team/巴拿马') }}">巴拿马</a>
                    </dd>
                    <dd>
                        <a value="突尼斯" href="{{ url('news/team/突尼斯') }}">突尼斯</a>
                        <a value="英格兰" href="{{ url('news/team/英格兰') }}">英格兰</a>
                    </dd>
                </dl>
                <dl>
                    <dt>H组</dt>
                    <dd>
                        <a value="波兰" href="{{ url('news/team/波兰') }}">波兰</a>
                        <a value="塞内加尔" href="{{ url('news/team/塞内加尔') }}">塞内加尔</a>
                    </dd>
                    <dd>
                        <a value="哥伦比亚" href="{{ url('news/team/哥伦比亚') }}">哥伦比亚</a>
                        <a value="日本" href="{{ url('news/team/日本') }}">日本</a>
                    </dd>
                </dl>

            </div>

        </div>
    </div>



@stop
@section('js')
    <script src="{{ asset('JS/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("div#info_1").show();
            $("div#info_2").hide();
            $("ul.info_menu li").click(function () {
                var cho = $(this).val();
                $("div#info_"+cho).show();
                for (var i = 1; i < 3; i++) {
                    if (cho != i)
                    {
                        $("div#info_" + i).hide();
                    }
                }
            });
        });
    </script>
@stop
