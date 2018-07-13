<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //指定表名
    protected $table = 'news';

    public $timestamps = true;

}