<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home.index');
})->name('home')->middleware('translate');

Route::get('/about', function () {
    return view('about.index');
})->name('about')->middleware('translate');

Route::get('/blog', function () {
    return view('blog.index');
})->name('blog')->middleware('translate');

Route::get('/services', function () {
    return view('service.index');
})->name('services')->middleware('translate');
//education navbar
Route::get('/webinar', function () {
    return view('webinar.index');
})->name('webinar')->middleware('translate');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact')->middleware('translate');
Route::get('/iner-contact', function () {
    return view('contact.inner');
})->name('inner')->middleware('translate');

Route::get('/products', function () {
    return view('product.index');
})->name('product')->middleware('translate');


//template all routing
Route::get('/templates', function () {
    return view('template.index');
})->name('template')->middleware('translate');

Route::get('/blog/article/1', function () {
    return view('article.index1');
})->name('article1')->middleware('translate');

Route::get('/blog/article/2', function () {
    return view('article.index2');
})->name('article2')->middleware('translate');


Route::get('/products/quiz', function () {
    return view('quiz.index');
})->name('quiz')->middleware('translate');

Route::get('/blank-page', function () {
    return view('blank-page.index');
})->name('blank-page')->middleware('translate');

// All kategori template - lihat semua
Route::get('/desain-terbaru', function () {
    return view('template.desain_terbaru', ['kategori' => 'Desain Terbaru']);
});

Route::get('/instagram-feeds', function () {
    return view('template.instagram_feeds', ['kategori' => 'Instagram Feeds']);
});

Route::get('/instagram-story', function () {
    return view('template.instagram_story', ['kategori' => 'Instagram Story']);
});

Route::get('/video-tiktok', function () {
    return view('template.video_tiktok', ['kategori' => 'Video Tiktok']);
});

Route::get('/quiz', function () {
    return view('quiz.index');
})->name('quiz1')->middleware('translate');

Route::get('/quiz2', function () {
    return view('quiz.index2');
})->name('quiz2')->middleware('translate');

Route::get('/quiz3', function () {
    return view('quiz.index3');
})->name('quiz3')->middleware('translate');
Route::get('/products/quiz', function () {
    return view('quiz.index');
})->name('quiz')->middleware('translate');

//auth login backend
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (requires auth)
// Route::get('/user-dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');


Route::get('/user-dashboard', function () {
    return view('user-dashboard.dashboard');
})->name('user-dashboard')->middleware('translate');


//halaman baru 
Route::get('/chart', function () {
    return view('chart.index');
})->name('chart')->middleware('translate');

//course page

Route::get('/course', function () {
    return view('course.index');
})->name('course')->middleware('translate');
Route::get('/quiz-course', function () {
    return view('course.quiz');
})->name('quiz-course')->middleware('translate');
Route::get('/certifikat-course', function () {
    return view('course.certifikat');
})->name('certifikat-course')->middleware('translate');
Route::get('/taskmodul2', function () {
    return view('course.task2');
})->name('task2-course')->middleware('translate');



//backend kuisioner 
use App\Http\Controllers\KuisionerController;

Route::post('/kuisioner', [KuisionerController::class, 'store'])->name('kuisioner.store');


use App\Http\Controllers\DigitalMarketerController;

Route::get('/digital-marketer', [DigitalMarketerController::class, 'result1'])
    ->name('result1')
    ->middleware('translate');
    Route::get('image/{filename}', [DigitalMarketerController::class, 'showImage'])->name('image.show');