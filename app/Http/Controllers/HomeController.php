<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['title']='Home';
        $data['banner']='components.index_join';
        return view('index', $data);
    }
    public function about()
    {
        $data['title']='About';
        return view('about');
    }
    public function contact(Request $request)
    {
        $data['title']='Contact';
        return view('contact', $data);
    }
    public function faq(Request $request)
    {
        $data['title']='Faq';
        return view('faq', $data);
    }
    public function gallery(Request $request)
    {
        $data['title']='Gallery';
        return view('gallery', $data);
    }
    public function history(Request $request)
    {
        $data['title']='History';
        return view('team', $data);
    }
    public function testimonial(Request $request)
    {
        $data['title']='Testimonial';
        return view('testimonial', $data);
    }
}
