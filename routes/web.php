<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactsController;
use App\Mail\ContactMessageCreated;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

route::get('/',[PagesController::class,'index'])->name('index');

route::get('about',[PagesController::class,'about'])->name('about');

route::get('contact',[ContactsController::class,'contact'])->name('contact');

route::post('contact',[ContactsController::class,'store'])->name('contact');

route::get('service',[PagesController::class,'service'])->name('service');

route::get('nos_produits',[PagesController::class,'nos_produits'])->name('nos_produits');

route::get('/test-email',function (){
    return new ContactMessageCreated('Mondesir','Mondesir@mail.com','essaie','test');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
