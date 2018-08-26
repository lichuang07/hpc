<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewPartner;
use App\Models\SchoolInfo;
use App\Models\ClubPublic;
use Auth;
use App\Repositories\AdminRepo;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct(AdminRepo $adminRepo)
    {
        //$this->middleware('auth');
        $this->data['newInfo'] = NewPartner::get();
        $this->adminRepo = $adminRepo;
    }

    public function index(Request $request)
    {
        $this->data['title'] = '后台管理-新社员注册';
        $this->data['publics'] = $this->adminRepo->getPublics();
        $this->data['action'] = 'index';

        return view('admin.index', $this->data);
    }

    public function newPartner(Request $request)
    {
        $this->data['title'] = '后台管理-新社员登记';
        $this->data['newInfo'] = NewPartner::get();
        $this->data['action'] = 'newPartner';

        return view('admin.new_partner', $this->data);
    }

    public function register()
    {
        $this->data['title'] = '后台管理-社员注册';
        $this->data['action'] = 'profile';

        return view('admin.register', $this->data);
    }

    public function newCluber(Request $request)
    {
        $msg = ['status' => 0,
                'msg' => 'error',
                ];
        $this->data['title'] = '后台管理-社员注册';
        $this->data['action'] = 'profile';
        if (Auth::check()) {
            $info = $request->all();
            $info['status'] = 1;
            $info['user_id'] = Auth::id();
            $msg['status'] = 1;
            $msg['msg'] = 'success';
            if (SchoolInfo::create($info)) {
                return response()->json($msg);
            }
        }

        return response()->json($msg);
    }

    public function clubInfo()
    {
        $this->data['title'] = '后台管理-社团管理';
        $this->data['action'] = 'club';

        return view('admin.club_info', $this->data);
    }

    public function clubManage()
    {
        $this->data['title'] = '后台管理-社团管理';
        $this->data['action'] = 'club';
        $this->data['method'] = 'manage';
        $this->data['cluberInfo'] = $this->adminRepo->cluberInfo();
        $this->data['unAudit'] = $this->adminRepo->unAudit();
        $this->data['audited'] = $this->adminRepo->audited();

        return view('admin.club_manage', $this->data);
    }

    public function registerConfirm($id)
    {
        $msg = ['status' => 0, 'msg' => 'error'];

        if (SchoolInfo::where('user_id', $id)->update(['status' => 2])) {
            $this->adminRepo->permissionUpdate($id, 2);
            $msg = ['status' => 1, 'msg' => 'success'];
        }

        return response()->json($msg);
    }

    public function dashboard()
    {
        $this->data['title'] = '后台管理-个人信息管理';
        $this->data['action'] = 'profile';
        //$this->data['method'] = 'manage';

        return view('admin.profile_dashboard', $this->data);
    }

    public function mailbox()
    {
        $this->data['title'] = '后台管理-邮件管理';
        $this->data['action'] = 'mail';
        //$this->data['method'] = 'manage';

        return view('admin.mail_mailbox', $this->data);
    }

    public function compose()
    {
        $this->data['title'] = '后台管理-邮件管理';
        $this->data['action'] = 'mail';
        //$this->data['method'] = 'manage';

        return view('admin.mail_compose', $this->data);
    }

    public function calendarShow()
    {
        $this->data['title'] = '后台管理-会议管理';
        $this->data['action'] = 'calendar';
        //$this->data['method'] = 'manage';

        return view('admin.calendar', $this->data);
    }

    public function setAdmin($uid)
    {
        $msg = ['status' => 0, 'msg' => '权限不足'];
        if (hpcAuth()->isAdmin()) {
            $this->adminRepo->permissionUpdate($uid, 1);
            $msg = ['status' => 1, 'msg' => '已设为管理员'];
        }

        return response()->json($msg);
    }

    public function registerDel($uid)
    {
        $msg = ['status' => 0, 'msg' => 'error'];

        if (SchoolInfo::where('user_id', $id)->update(['status' => 0])) {
            $msg = ['status' => 1, 'msg' => '已删除注册信息'];
        }

        return response()->json($msg);
    }

    public function publicManage(Request $request)
    {
        $this->data['title'] = '后台管理-公告管理';
        $this->data['action'] = 'club';
        $this->data['publics'] = $this->adminRepo->getPublics();
        $this->data['method'] = 'public';

        return view('admin.club_public', $this->data);
    }

    public function newPublics(Request $request)
    {
        $msg = ['status' => 0, 'msg' => '失败,无法发布公告'];
        $this->data['title'] = '后台管理-公告管理';
        $this->data['action'] = 'club';

        if (Auth::check()) {
            $pub = $request->all();
            $pub['user_id'] = Auth::id();
            if (ClubPublic::create($pub)) {
                $msg = ['status' => 1, 'msg' => '成功,已发布新公告'];
            }
        }

        $this->data['publics'] = $this->adminRepo->getPublics();
        $this->data['msg'] = $msg;

        return redirect('admins/club/public');
    }

    public function delPublic($pid)
    {
        $msg = ['status' => 0, 'msg' => '删除失败'];
        if ($this->adminRepo->delPublic($pid)) {
            $msg = ['status' => 1, 'msg' => '已删除公告'];
        }

        return response()->json($msg);
    }
}
