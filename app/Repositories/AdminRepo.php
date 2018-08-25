<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\SchoolInfo;

/**
 * summary
 */
class AdminRepo
{
    /**
     * summary
     */
    public function __construct()
    {
    }

    /**
     * 获得所有或单个用户信息
     *
     * @Author   lichuang
     * @DateTime 2018-08-26
     *
     * @param int $id [description]
     *
     * @return [type] [description]
     */
    public function cluberInfo($id = 0)
    {
        if ($id) {
            return User::select('users.id', 'users.name', 'users.nickname', 'users.admin', 'users.avatar', 'users.email', 'si.name as truename', 'si.mobile', 'si.grade', 'si.college', 'si.major', 'si.othermsg', 'si.status')
                 ->where('users.id', $id)
                ->leftJoin('school_info as si', 'users.id', '=', 'si.user_id')
                ->first();
        } else {
            return User::select('users.id', 'users.name', 'users.nickname', 'users.admin', 'users.avatar', 'users.avatar', 'users.email', 'si.name as truename', 'si.mobile', 'si.grade', 'si.college', 'si.major', 'si.othermsg', 'si.status')
                ->leftJoin('school_info as si', 'users.id', '=', 'si.user_id')
                ->orderBy('si.status')
                ->get();
        }
    }

    /**
     * 未审核社团注册用户
     *
     * @Author   lichuang
     * @DateTime 2018-08-26
     *
     * @return [type] [description]
     */
    public function unAudit()
    {
        return User::select('users.id', 'users.name', 'users.nickname', 'users.admin', 'users.avatar', 'users.avatar', 'users.email', 'si.name as truename', 'si.mobile', 'si.grade', 'si.college', 'si.major', 'si.othermsg', 'si.status')
                ->leftJoin('school_info as si', 'users.id', '=', 'si.user_id')
                ->where('si.status', 1)
                ->get();
    }

    /**
     * 已通过审核社团注册用户
     *
     * @Author   lichuang
     * @DateTime 2018-08-26
     *
     * @return [type] [description]
     */
    public function audited()
    {
        return User::select('users.id', 'users.name', 'users.nickname', 'users.admin', 'users.avatar', 'users.avatar', 'users.email', 'si.name as truename', 'si.mobile', 'si.grade', 'si.college', 'si.major', 'si.othermsg', 'si.status')
                ->leftJoin('school_info as si', 'users.id', '=', 'si.user_id')
                ->where('si.status', '>', 1)
                ->get();
    }

    /**
     * 更改用户权限
     *
     * @Author   lichuang
     * @DateTime 2018-08-26
     *
     * @param [type] $uid        [description]
     * @param [type] $permission [description]
     *
     * @return [type] [description]
     */
    public function permissionUpdate($uid, $permission)
    {
        User::where('id', $uid)->update(['admin' => $permission]);

        return true;
    }
}
