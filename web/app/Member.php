<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //指定表名
    protected $table = 'member';

    public $timestamps = true;

}