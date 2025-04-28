<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ExpertiseController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\NotAllowUserDoctorController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\PatientNotAllowedController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ReserveController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Doctor\DayContrller;
use App\Http\Controllers\Doctor\DoctorDashboardController;
use App\Http\Controllers\Doctor\DoctorReserveController;
use App\Http\Controllers\Doctor\PostsController;
use App\Http\Controllers\Doctor\ProfileCompeleteController;
use App\Http\Controllers\Doctor\VideoController;
use App\Http\Controllers\Patient\PatientComepeleteProfileController;
use App\Http\Controllers\Patient\PatientDashboardController;
use App\Http\Controllers\Theme\MainController;
use App\Models\Category;
use App\Models\Expertise;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\FileController;
use App\Http\Controllers\Admin\UploadsFileController;
use App\Http\Controllers\Patient\PatientReserveController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Admin\DoctorComentController;


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
//-----------------------------------------------------Admin----------------------------------------------------//
Route::get('/admin', [AdminDashboardController::class, 'index'])->middleware('adminMiddleware')->name('admin.home');
Route::prefix('admin')->name('admin.')->middleware('adminMiddleware')->group(function () {
    //--------------------Content---------------------------------------//
    Route::resource('categories', CategoryController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('posts', PostController::class);
    Route::resource('faqs', FaqController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('pages', PageController::class);
    Route::resource('settings', SettingController::class);
    //---------------users Manage--------------------------------------//
    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('reserves', ReserveController::class);
    //-------------------------other---------------------------------//
    Route::resource('expertises', ExpertiseController::class);
    Route::resource('docStatus', NotAllowUserDoctorController::class);
    Route::resource('patStatus', PatientNotAllowedController::class);
    Route::resource('uploads', UploadsFileController::class);
    Route::resource('doctorComments', DoctorComentController::class);
    Route::post('changeUserStatus/{userId}', [NotAllowUserDoctorController::class, 'changeUserStatus'])->name('changeUserStatus');
    //-----------this is AdminDashboardController group methods----------------//
    Route::controller(AdminDashboardController::class)->group(function () {
        Route::get('page/id', 'showPage')->name('showPage');
        Route::get('changePostStatus/{postStatus}', 'changePostStatus')->name('changePostStatus');
        Route::get('changeCommentStatus/{commentStatus}', 'changeCommentStatus')->name('changeCommentStatus');
        Route::get('changeDoctorCommentStatus/{doctorCommentStatus}', 'changeDoctorCommentStatus')->name('changeDoctorCommentStatus');
        Route::get('changePostStatus/{postStatus}', 'changePostStatus')->name('changePostStatus');
        Route::get('changeDoctorStatus/{doctorStatus}', 'changeDoctorStatus')->name('changeDoctorStatus');
    });
});
//-----------------------------------------------------Doctor----------------------------------------------------//
Route::get('/doctor', [DoctorDashboardController::class, 'index'])->middleware('doctorMiddleware')->name('doctor.home');
Route::prefix('doctor')->name('doctor.')->middleware('doctorMiddleware')->group(function () {
    Route::resource('reserves', DoctorReserveController::class);
    Route::resource('posts', PostsController::class);
    Route::resource('profile', ProfileCompeleteController::class);
    Route::get('/showProfile', [ProfileCompeleteController::class, 'showProfile'])->name('showProfile');
    Route::resource('days', DayContrller::class);
    Route::resource('videos', VideoController::class);
    Route::resource('files', FileController::class);
    Route::get('changeStatus/{reserveId}', [DoctorReserveController::class, 'changeStatus'])->name('changeStatusReserve');
});
//-----------------------------------------------------Patient----------------------------------------------------//
Route::get('/patient', [PatientDashboardController::class, 'index'])->name('patient.home');
Route::prefix('/patient')->name('patient.')->group(function () {
    Route::resource('profile', PatientComepeleteProfileController::class);
    Route::resource('reserves', PatientReserveController::class);
});
//-----------------------------------------------------this routes for Content website----------------------------------------------------//
Route::prefix('/')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/doctors', [MainController::class, 'doctors'])->name('doctors');
    Route::get('/show/{post}', [MainController::class, 'show'])->name('singlePost');
    Route::get('/showDoctor/{doctor}', [MainController::class, 'showDoctor'])->name('showDoctor');
    Route::get('/blog', [MainController::class, 'blog'])->name('blog');
    Route::get('page/{id}', [MainController::class, 'showPage'])->name('showPage');
    Route::get('expertiseDoctor/{exId}', [MainController::class, 'expertiseDoctor'])->name('expertiseDoctor');
    Route::get('/faq', [MainController::class, 'faq'])->name('faqs');
    Route::get('/blog/{catId}', [MainController::class, 'postCategory'])->name('postCategory');
});


Route::post('/reserve', [ReserveController::class, 'store'])->name('reserve');
Route::post('/comments', [CommentController::class, 'store'])->name('comment.store');
Route::post('/doctorComments', [DoctorComentController::class, 'store'])->name('doctorComments.store');
//-------------------------------------Variable send to all views-------------------------------------//


View::composer(['*'], function ($view) {
//    $menus = Menu::all();
//    $allMenus = Menu::query()->pluck('title', 'id')->all();
//    $view->with('menus', $menus);
//    $view->with('allMenus', $allMenus);
    $setting = Setting::query()->where('id', 1)->first();
    $view->with('setting', $setting);
    $expertises = Expertise::all();
    $view->with('expertises', $expertises);
    $categories = Category::all();
    $view->with('categories', $categories);
});
