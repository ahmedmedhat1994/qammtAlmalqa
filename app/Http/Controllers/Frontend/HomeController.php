<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;


class HomeController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('الصفحة الرئيسية');

        return view('frontend.index');
    }
    public function about()
    {
     SEOTools::setTitle('نبذة عنا');
     return view('frontend.about');
    }
    public function privacy_policy()
    {
        SEOTools::setTitle('سياسة الخصوصيّة'); return view('frontend.privacy_policy');
    }
    public function conditions()
    {
    SEOTools::setTitle('شروط الاستخدام'); return view('frontend.conditions');
    }
    public function contact()
    {
        SEOTools::setTitle('اتّصل بنا'); return view('frontend.contact');
    }
}
