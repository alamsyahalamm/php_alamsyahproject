<?php

use App\Http\Controllers\BazmaController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('example', function () {
    return 'Example route get';
});

Route::get('coba', function () {
    return view('coba', ['nama ' => 'alamsyah']);
    //ketika coba itu ada dalam folder, apakaf kita lngsug filenya?
});

Route::get('/example/{exampleId}', function ($exampleId) {
    return "example number : $exampleId";
    //ketika coba itu ada dalam folder, apakaf kita lngsug filenya?
});
Route::get('/posts/{posgId}/comments/{commentsId}', function ($postId, $commentsId) {
    return "ini post ke: $postId dan comments ke: $commentsId";
});

//opsional (boleh kosong)
Route::get('/post/{postId}', function ($postId = null) {
    return " post opsional: $postId";
});

Route::get('/response/index', [BazmaController::class, 'responseFunction']);

Route::get('/response/header', [BazmaController::class, 'responseHeader']);

Route::get('/enkripsi/code', [BazmaController::class, 'encryptionData']);

Route::get('/redirect/to', [App\http\Controllers\BazmaController::class, 'redirectTo']);
Route::get('/redirect/from', [App\http\Controllers\BazmaController::class, 'redirectFrom']);

Route::get('/redirect/to/named', [App\http\Controllers\BazmaController::class, 'redirectToNamedRoute'])->name("redirect.to");
Route::get('/redirect/from/named', [App\http\Controllers\BazmaController::class, 'redirectFromNamedRoute']);

