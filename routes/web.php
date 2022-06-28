<?php
use App\http\Controllers\HomeController;
use App\http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home.index', []);
// });

// Route::get('/contact', function () {
//     return view('home.contact');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/contact', [HomeController::class, 'home']);

// Route::get('/posts/{id}', function ($id) {
    $posts = [
        1 => [ 
            'title' => 'Intro to Laravel',
            'content' => 'This is a short intro to laravel',
            'is_new' => true,
            'has_comments' => true 
        ],
        2 => [
            'title' => 'Intro to PHP',
            'content' => 'This is a short intro to PHP',
            'is_new' => false
            
            ]
    ];

Route::resource('posts', PostController::class)
->only(['index','show', 'create', 'store', 'edit', 'update']);

// Route::get('/posts', function() use ($posts) {
//     return view('posts.index', ['posts' => $posts]);
// });

// Route::get('/posts/{id}', function ($id) use($posts) {
//     abort_if(!isset($posts[$id]), 404);
//     return view('posts.show', ['post' => $posts[$id]]);
// });

    
// });

Route::get('/recent-posts/{days_ago?}', function ($daysAgo = 20) {
    return 'posts from' . $daysAgo . 'days ago';
});  
?>