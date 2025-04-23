<?php
ini_set('max_execution_time', 120);

use Illuminate\Support\Facades\Route;

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

Route::get('/webinar', function () {
    return view('webinar.index');
})->name('webinar')->middleware('translate');

Route::get('/contact', function () {
    return view('contact.index');
})->name('contact')->middleware('translate');

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

Route::get('/user-dashboard', function () {
    return view('user-dashboard.dashboard');
})->name('user-dashboard')->middleware('translate');

Route::get('/products/quiz', function () {
    return view('quiz.index');
})->name('quiz')->middleware('translate');

Route::get('/blank-page', function () {
    return view('blank-page.index');
})->name('blank-page')->middleware('translate');

Route::get('/signup', function () {
    return view('signup.signup');
});



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


Route::get('/login', function () {
    return view('auth.login');
})->name('login');


use App\Http\Controllers\AuthController;


Route::post('/login', [AuthController::class, 'login'])->name('login');

// Halaman beranda setelah login berhasil
Route::get('/home', function () {
    return view('home.index');  // Pastikan kamu punya view 'home.index.php'
})->name('home.index');
Route::get('/home', function () {
    return view('home.blade');  // Jika menggunakan .php, pastikan nama file di resources/views sesuai
})->name('home.blade');

use App\Http\Controllers\QuizController;

Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');

Route::get('/small-business', function () {
    return view('small-business.small-business');
})->name('small-business');


Route::get('/digital-marketer', function () {
    return view('digital-marketer');
})->name('digital-marketer');

Route::get('/creative-entrepreneur', function () {
    return view('creative-entrepreneur');
})->name('creative-entrepreneur');



