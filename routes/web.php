<?php

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
use App\Models\WP\Post as Post;
use App\Models\WP\BookableResource as BookableResource;
use App\Models\WP\Booking as Booking;
use App\Models\WP\Instructor as Instructor;

/* STYLES */
Route::get('/styles', function () {

    return view('styles.default');  
});

/* BOOKING PROCESS */

Route::get('/', function () {

    // $instructors = Post::taxonomy('specialties', 'guitar')->where('post_type', 'instructors')->take(10)->get();

    return view('search');
});


Route::get('/instructors', function () {
    $instructors = Post::taxonomy('specialties', 'guitar')
        ->where('post_type', 'instructors')
        ->with('taxonomies')
        ->take(9)
        ->get();

    return view('partials.search-results')->with(compact('instructors'));
});



