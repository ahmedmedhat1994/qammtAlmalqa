<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Blog;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('الصفحة الرئيسية');
            $blogs = Blog::orderBy('id','DESC')->get();
        return view('Frontend.index',compact('blogs'));
    }
    public function about()
    {
     SEOTools::setTitle('نبذة عنا');
     return view('Frontend.about');
    }
    public function privacy_policy()
    {
        SEOTools::setTitle('سياسة الخصوصيّة'); return view('Frontend.privacy_policy');
    }
    public function conditions()
    {
    SEOTools::setTitle('شروط الاستخدام'); return view('Frontend.conditions');
    }
    public function contact()
    {
        SEOTools::setTitle('اتّصل بنا'); return view('Frontend.contact');
    }
}
