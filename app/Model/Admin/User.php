<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //user表
    /**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'user';
   	protected $primaryKey = 'id';
    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;
    protected $guarded = [];
    // public function uf()
    // {
    //     return $this->hasOne('App\Model\Home\Uf','uid','id');
    // }
}
