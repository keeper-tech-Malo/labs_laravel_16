<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\BinController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\VideoController;
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

// ------------FRONT------------
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/blogpost/{id}', [FrontController::class, 'blogpost'])->name('blogpost');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::post('/image-resize', [LogoController::class, 'imgResize'])->name('img-resize');

//Search
Route::get('/blog/search', [FrontController::class,'search'])->name('search'); 

// ------------BACK------------
Route::middleware(['auth'])->group(function (){
    Route::get('/admin', [BackController::class, 'index'])->name('dashboard');
    Route::middleware(['editor'])->group(function (){
        Route::resource('/admin/post', PostController::class);
        Route::delete('/admin/post/{id}/destroy', [PostController::class, 'softDelete'])->name('softdelete');
        Route::resource('/admin/tag', TagController::class);
        Route::resource('/admin/category', CategoryController::class);
        Route::post('/blogpost/create/{id}', [CommentController::class, 'store'])->name('comment.store');
        Route::delete('/blogpost/{id}/delete', [CommentController::class, 'destroy'])->name('comment.destroy');
        Route::middleware(['webmaster'])->group(function(){
            Route::resource('/admin/verify', VerifyController::class);
            Route::resource('/admin/bin', BinController::class);
            Route::put('/admin/verify/{id}/valid', [VerifyController::class, 'valid'])->name('valid');
            Route::put('/admin/user/{user}/validate', [UserController::class, 'verifyUser'])->name('verifyUser');
            Route::put('/admin/user/{user}/changerole', [UserController::class, 'changeRole'])->name('changeRole');
            Route::delete('/admin/bin/{id}/restore', [BinController::class, 'softRestore'])->name('softRestore');
            Route::middleware(['admin'])->group(function(){
                Route::resource('/admin/newsletter', NewsletterController::class);
                Route::resource('/admin/user', UserController::class);
                Route::resource('/admin/video', VideoController::class);
                Route::resource('/admin/discover', DiscoverController::class);
                Route::resource('/admin/image', ImageController::class);
                Route::put('/admin/image/{image}/firstimg', [ImageController::class, 'firstImage'])->name('firstImage');
                Route::resource('/admin/title', TitleController::class);
                Route::resource('/admin/service', ServiceController::class);
                Route::resource('/admin/feature', FeatureController::class);
                Route::resource('/admin/contact', ContactController::class);
                Route::resource('/admin/map', MapController::class);
                Route::resource('/admin/footer', FooterController::class);
            });
        });
    });
});


// ------------NEWSLETTER------------
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletterStore');

// ------------MAIL------------
Route::post('/mail', [ContactController::class, 'store'])->name('contactform');


    



require __DIR__.'/auth.php';