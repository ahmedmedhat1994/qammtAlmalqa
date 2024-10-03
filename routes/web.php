<?php

use App\Http\Controllers\ProfileController;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Spatie\Sitemap\SitemapGenerator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('/',['App\Http\Controllers\Frontend\HomeController','index'])->name('index');

Route::get('/about',['App\Http\Controllers\Frontend\HomeController','about'])->name('about');
Route::get('/privacy_policy',['App\Http\Controllers\Frontend\HomeController','privacy_policy'])->name('privacy_policy');
Route::get('/conditions',['App\Http\Controllers\Frontend\HomeController','conditions'])->name('conditions');
Route::get('/contact',['App\Http\Controllers\Frontend\HomeController','contact'])->name('contact');
Route::get('/qammaworld',function (){
    $url = 'https://linktr.ee/qalmalqa';
    return \Illuminate\Support\Facades\Redirect::to($url);
})->name('qammaworld');
Route::get('/site',function (){
    SitemapGenerator::create('https://qalmalqa.com/')->writeToFile('public/sitemap.xml');

});
Route::post('/contact_form',function (){  return view('Frontend.contact'); })->name('contact_form');



Route::get('/dashboard', function () {
    return view('Backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'as' => 'admin.'],function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('login');
    });
    Route::group(['middleware'=>'auth'],function (){
   Route::resource('/blog',\App\Http\Controllers\BlogController::class);
   Route::resource('/contact',\App\Http\Controllers\ContactController::class);
    });
});



Route::get('/clear-cache', function () {
//    Artisan::call('config:cache');
    Artisan::call('cache:clear');
//    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
//    Artisan::call('optimize');
//    Artisan::call('cache:forget spatie.permission.cache');
//    Artisan::call('permission:cache-reset');
    return "Cache is cleared";
})->name('clear.cache');


require __DIR__.'/auth.php';
