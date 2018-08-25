<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewPartner;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * 登录页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @return view 返回登录页
     */
    public function home()
    {
        return view('home');
    }

    /**
     * 默认宣传主页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @param Request $request
     *
     * @return view 返回默认宣传主页
     */
    public function index(Request $request)
    {
        $data['title'] = 'Home';
        $data['banner'] = 'components.index_join';

        return view('index', $data);
    }

    /**
     * 关于我们页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @return view 返回关于我们页
     */
    public function about()
    {
        $data['title'] = 'About';

        return view('about');
    }

    /**
     * 联系我们页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @param Request $request
     *
     * @return view 联系我们页
     */
    public function contact(Request $request)
    {
        $data['title'] = 'Contact';

        return view('contact', $data);
    }

    /**
     * 问题页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @param Request $request
     *
     * @return view 返回问题页
     */
    public function faq(Request $request)
    {
        $data['title'] = 'Faq';

        return view('faq', $data);
    }

    /**
     * 相册页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @param Request $request
     *
     * @return view 返回相册页
     */
    public function gallery(Request $request)
    {
        $data['title'] = 'Gallery';

        return view('gallery', $data);
    }

    /**
     * 历史页
     *
     * @Author   lichuang
     * @DateTime 2018-08-23
     *
     * @param Request $request
     *
     * @return view 返回历史页
     */
    public function history(Request $request)
    {
        $data['title'] = 'History';

        return view('team', $data);
    }

    /**
     * 荣誉页
     *
     * @Author   lichuang
     * @DateTime 2018-08-24
     *
     * @param Request $request
     *
     * @return view 返回荣誉页
     */
    public function testimonial(Request $request)
    {
        $data['title'] = 'Testimonial';

        return view('testimonial', $data);
    }

    /**
     * 首页加入我们处理
     *
     * @Author   lichuang
     * @DateTime 2018-08-24
     *
     * @param Request $request
     *
     * @return [type] [description]
     */
    public function join(Request $request)
    {
        NewPartner::create($request->all());
        $data['title'] = 'Home';

        return response()->json('success');
    }
}
