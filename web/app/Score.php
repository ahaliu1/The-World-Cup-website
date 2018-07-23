<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //指定表名
    protected $table = 'score';

    public $timestamps = true;
}