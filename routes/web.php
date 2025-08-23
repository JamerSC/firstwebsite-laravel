<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

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

// Controller
// posts.create, posts.store, posts.edit, posts.update
Route::resource('posts', PostController::class);

// ROUTE GET METHOD

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

// parameters using route
// Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
//     //return view('portfolio');
//     return $firstname . " " . $lastname;
// });

Route::get('/portfolio', function () {
    return view('portfolio');
});

// grouped or porfolio related routes
Route::prefix('portfolio')->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/organization', function () {
        return view('organization');
    });
});

// route with page name
Route::get('/test', function () {
    return "Test only";
})->name("testpage");

// POST METHOD

// Route::post('/formsubmitted', function () {
//      return "Form submitted successfuly!";
// });

// Route::post('/formsubmitted', function () {
//      return "Form submitted successfuly!";
// })->name('formsubmitted');

Route::post('/formsubmitted', function (Request $request) {

    $request->validate([
        'fullname'=> 'required|min:3|max:30',
        'email'=> 'required|min:13|max:30|email',
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your fullname is {$request->input('fullname')} and your email is $email";

})->name('formsubmitted');
