<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\WelcomeController;
    use App\Http\Controllers\IndexController;
    use App\Http\Controllers\AboutController;
    use App\Http\Controllers\ArticlesController;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\PhotoController;

    Route::resource('photos', PhotoController::class);

    Route::get('/hello', [WelcomeController::class,'hello']);

    Route::get('/articles/{id}', [ArticlesController::class,'articles']);

    Route::get('/index', [IndexController::class,'index']);

    Route::get('/about', [AboutController::class,'about']);

    Route::get('/articles/{id}', [PageController::class,'articles']);

    Route::get('/index', [PageController::class,'index']);

    Route::get('/about', [PageController::class,'about']);

    Route::get('/world', function () {
        return 'World';
    });
    

    Route::get('/user/{name}', function ($name) {
        return 'Nama saya '.$name;
    });

    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });


    Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
    });

    Route::resource('photos', PhotoController::class)->only([
        'index', 'show'
    ]);
    
    Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
    ]);

    Route::get('/greeting', [WelcomeController::class, 'greeting']);
    
?>