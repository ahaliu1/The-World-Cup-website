<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //指定表名
    protected $table = 'comment';

    protected  $fillable = ['news_id','comment'];

    public $timestamps = true;

}