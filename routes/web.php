<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UserProfile;
use App\Http\Controllers\AdminBlog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//user
Route::get('/',[HomeController::class,'index']);
Route::get('/addblog',[BlogController::class,'index'])->name('addblog');
Route::post('/addblog',[BlogController::class,'store'])->name('addimage');
Route::get('/allblog',[BlogController::class,'allblog']);
Route::get('/view/blog/{id}',[BlogController::class,'singleblog']);
Route::get('/',[HomeController::class,'someblog']);
Route::get('/profile',[UserProfile::class,'profile']);
//Route::get('/profile',[UserProfile::class,'profileinformation']);


Route::get('addcircular', function () {
    return view('user.addcircular');
});
Route::get('addproject', function () {
    return view('user.addproject');
});

Route::get('addquestion', function () {
    return view('user.addquestion');
});


Route::get('allproject', function () {
    return view('user.allproject');
});

Route::get('allquestion', function () {
    return view('user.allquestion');
});

Route::get('allcircular', function () {
    return view('user.allcircular');
});


Route::get('circulardetails', function () {
    return view('user.circulardetails');
});

Route::get('projectdetails', function () {
    return view('user.projectdetails');
});

Route::get('questiondetails', function () {
    return view('user.questiondetails');
});


Route::get('oneblog', function () {
    return view('user.oneblog');
});

Route::get('oneproject', function () {
    return view('user.oneproject');
});

Route::get('onequestion', function () {
    return view('user.onequestion');
});



Route::get('updateprofile', function () {
    return view('user.updateprofile');
});

Route::get('/userdashboard', function () {
    return view('user.userdashboard');
});





//admin

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');





Route::group(['prefix'=>'admin'], function() {
    Route::group(['middleware'=>'authadmin'], function() {

        Route::get('/delete/{id}',[AdminBlog::class,'delete']);

        Route::get('/project', function () {
            return view('admin.project');
        });

        Route::get('/question', function () {
            return view('admin.question');
        });

        Route::get('/circular', function () {
            return view('admin.circular');
        });


        Route::get('/blog',[AdminBlog::class,'adminblog']);

        Route::get('/dashboard',[AdminBlog::class,'frontpageblog']);

        Route::get('/edit/{id}',[AdminBlog::class,'edit']); 
        Route::post('/update/blog/{id}',[AdminBlog::class,'update']);
        
    });
});


