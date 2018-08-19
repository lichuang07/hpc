<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewPartner;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $data['title'] = '后台管理';
        $data['newInfo'] = NewPartner::get();

        return view('admin.index', $data);
    }
}
