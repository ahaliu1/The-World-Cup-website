<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //指定表名
    protected $table = 'data';

    public $timestamps = true;
}