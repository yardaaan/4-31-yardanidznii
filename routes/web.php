<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;

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
Route::get('/', function () {
    return view('home' ,[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Yardan",
        "email" => "yardan@gmail.com",
        "gambar" => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5f22960e-d351-4cba-a583-474c1e48b57d/dee4rcr-8b18307a-02c7-4237-a2c6-0e1ed528fbeb.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzVmMjI5NjBlLWQzNTEtNGNiYS1hNTgzLTQ3NGMxZTQ4YjU3ZFwvZGVlNHJjci04YjE4MzA3YS0wMmM3LTQyMzctYTJjNi0wZTFlZDUyOGZiZWIuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Ilekc_Y9WPmY3-JmjiVDe14UjCABnpaAhev-YZ_-01k",
        "title" => "About"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/delete_contact/{id}', ContactController::class . '@destroy');
Route::get('/edit_contact/{id}', ContactController::class . '@edit');
Route::post('/update_contact', ContactController::class . '@update');


Route::resource('/contact', ContactController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
