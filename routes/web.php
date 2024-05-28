<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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
    return view('curriculumv');
});


Route::get('/home', function () {
    return view('curriculumv');
});



// Route::get('/',function(){
//     Mail::to('ingjosue.cardona@gmail.com')->send(new ContactanosMailable); 
//     return 'mensaje enviado';
// }); 
Route::post('/', [ContactFormController::class, 'store'])->name('curriculumv.send');