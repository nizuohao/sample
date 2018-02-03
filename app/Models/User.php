<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 指明要进行数据库交互的数据表名称
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *过滤用户提交的字段，只有包含在该属性中的字段才能够被正常更新
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *当我们需要对用户密码或其他敏感信息在用户实例通过数组或JSON显示时进行隐藏，则可使用hidden属性
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
