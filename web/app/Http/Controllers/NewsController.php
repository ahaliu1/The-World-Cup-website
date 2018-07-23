<?php
namespace App\Http\Controllers;

use App\Comment;
use App\Member;
use App\Team;
use Illuminate\Http\Request;
use App\News;
use App\Schedule;
use App\Score;
use App\Shot;

class NewsController extends Controller
{

    // 新闻列表页
    public function index()
    {

        $newss = News::paginate(10);

        return view('news.index', [
            'newss' => $newss,
        ]);
    }

    //新闻具体内容
    public function info($id,Request $request)
    {
        //新闻正文
        $news = News::find($id);
        //新闻评论
        $comments = Comment::where('news_id','=',$id)
            ->get();
        //发表评论
        $comment = new Comment();
        if ($request->isMethod('POST')) {
            $data = $request->input('Comment');
            $comment->comment = $data['comment'];
            $comment->news_id = $id;
            $comment->save();
            return redirect()->back();
        }
        return view('news.info', [
            'news' => $news, 'comments'=> $comments
        ]);
    }

    // 射手列表页
    public function shot()
    {
        $shots = Shot::get();

        return view('news.shot', [
            'shots' => $shots
        ]);
    }

    // 积分列表页
    public function score()
    {
        $group=array("A组","B组","C组","D组","E组","F组","G组","H组");
        $scores=array();
        for($i=0; $i<=7;$i++){
            $scores[$i]=Score::where('play_group','=',$group[$i])
                ->orderBy('rank','asc')
                ->get();
        }
        return view('news.score', [
            'scores' => $scores,'group'=>$group
        ]);
    }

    // 赛程页
    public function schedule()
    {
        $group1=array("6月18日","6月19日","6月20日","6月21日","6月22日","6月23日","6月24日");
        $group2=array("6月25日","6月26日","6月27日","6月28日","6月29日","6月30日","7月1日");
        $group3=array("7月2日","7月3日","7月4日","7月5日","7月6日","7月7日","7月8日");
        $schedule1=array();
        $schedule2=array();
        $schedule3=array();
        for($i=0; $i<=6;$i++){
            $schedule1[$i]=Schedule::where('data','=',$group1[$i])
                ->orderBy('time','asc')
                ->get();
        }
        for($i=0; $i<=6;$i++){
            $schedule2[$i]=Schedule::where('data','=',$group2[$i])
                ->orderBy('time','asc')
                ->get();
        }
        for($i=0; $i<=6;$i++){
            $schedule3[$i]=Schedule::where('data','=',$group3[$i])
                ->orderBy('time','asc')
                ->get();
        }
        return view('news.schedule', ['schedule1' => $schedule1,'group1'=>$group1,
            'schedule2' => $schedule2,'group2'=>$group2,
            'schedule3' => $schedule3,'group3'=>$group3]);
    }

    // 球队介绍
    public function member($name)
    {
        $gro=array("A组","B组","C组","D组","E组","F组","G组","H组");
        //  $teams=array();
        //  for($i=0; $i<=7;$i++){
        //      $teams[$i]=Score::where('play_group','=',$gro[$i])
        //          ->get();
        //   }
        $team1=Score::where('play_group','=',$gro[0])
            ->get();
        //球队
        $te = Team::find($name);
        //球员
        $group=array("守门员","后卫","中场","前锋");
        $members=array();
        for($i=0; $i<=3;$i++){
            $members[$i]=Member::where(['team'=>$name,'position'=>$group[$i]])
                ->get();
        }
        return view('news.member',[
            'te'=> $te,'members'=>$members,'group'=>$group,'team1'=>$team1,'gro'=>$gro]);
    }

    //球员信息
    public function player($id)
    {
        //球员
        $player=Member::find($id);

        $team = Team::find($player->team);
        //判断是否是明星球员
        if($player->is_star == 0) {
             return view('news.player',['player'=>$player,'team'=> $team]);
        }
        else {
            return view('news.star',['player'=>$player,'team'=> $team]);
        }
    }

    // 世界杯介绍
    public function intro()
    {
        return view('news.intro');
    }

    // 评论统计
    public function data()
    {
        return view('news.comment');
    }

}