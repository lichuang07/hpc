<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\SchoolInfo;
use Auth;

class AuthRepo
{
    /**
     * 判断是否是管理员
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @return bool [description]
     */
    public static function isAdmin()
    {
        if (Auth::user()->admin <= 1) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 返回用户信息
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @param mixed $uid
     *
     * @return [type] [description]
     */
    public static function user($uid = 0)
    {
        $id = 0 == $uid ? Auth::id() : $uid;

        return User::select('users.id', 'users.name', 'users.nickname', 'users.admin', 'users.avatar', 'users.email', 'si.name as truename', 'si.mobile', 'si.grade', 'si.college', 'si.major', 'si.othermsg', 'si.status')
                 ->where('users.id', $id)
                ->leftJoin('school_info as si', 'users.id', '=', 'si.user_id')
                ->first();
    }

    /**
     * 返回用户信息
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @return [type] [description]
     */
    public static function getId()
    {
        return Auth::id();
    }

    /**
     * 检查是否登录
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @return [type] [description]
     */
    public static function check()
    {
        if (Auth::check()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断是否已进行社团注册过且通过审核的用户
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @param int $uid [description]
     *
     * @return bool [description]
     */
    public static function isMember($uid = 0)
    {
        $status = 0 == $uid ? self::user()->status : self::user($uid)->status;
        if (2 == $status || 3 == $status) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 判断是否已经注册过
     *
     * @Author   lichuang
     * @DateTime 2018-08-25
     *
     * @param int $uid [description]
     *
     * @return bool [description]
     */
    public function isRegistered($uid = 0)
    {
        $status = 0 == $uid ? self::user()->status : self::user($uid)->status;
        if (0 == $status) {
            return false;
        } else {
            return true;
        }
    }
}
