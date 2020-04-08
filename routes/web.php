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

Route::get('/', function () {
    return view('welcome');
});
//Route::view('/','welcome');
//Route::view('/home','home');

/*Route::get('home', function () {
    return view('home');
});*/

/*Route::get('a', function () {
    return view('pages/about');
});*/
/*Route::get('r', function () {
    return "Hi Rammiah";
});*/

/*Route::get('a/{name}', function($name){
    return $name;
});*/
/*Route::get('name/{fname}/{lname}', function($fname,$lname){
    return view('pages/name',['f'=>$fname,'l'=>$lname]);
});*/
/*Route::get('name/{fname?}/{lname?}', function($fname="Rammiah",$lname="Jeyakumar"){
    return view('pages/name',['f'=>$fname,'l'=>$lname]);
})->where('fname', '[0-9]+');*/
 Route::get('name/{id?}/{lname?}', function($fname="Rammiah",$lname="Jeyakumar"){
     return view('pages/name',['f'=>$fname,'l'=>$lname]);
})->name('name');

// Route::get('page/{name?}/{bgcolor?}', function($name,$bgcolor){
//     return view('pages/page',['n'=>$name,'c'=>$bgcolor]);
// })->name('page');
 
 Route::get('pages/home', function () {
    return view('pages/home');
 })->name('home');

Route::get('pages/about', function () {
     return view('pages/about');
 })->name('about');

 Route::get('pages/contact', function () {
     return view('pages/contact');
 })->name('contact');

 Route::get('/test', function () {
     return view('layout/dashboard');
 });

 Route::get('pages/temp/jambortans', function () {
     return view('pages/temp/jambortans');
 })->name('jambortans');

 Route::get('pages/temp/checkout', function () {
     return view('pages/temp/checkout');
 })->name('checkout');

 Route::get('pages/temp/cover', function () {
     return view('pages/temp/cover');
 })->name('cover');

 Route::get('pages/temp/floating', function () {
     return view('pages/temp/floating');
 })->name('floating');

 Route::get('pages/temp/blog', function () {
     return view('pages/temp/blog');
 })->name('blog');

// Controller 
//Route::get('student','StudentController@index');


// Route::resource('student','StudentController')->middleware('auth');
// Route::resource('employee','EmployeeController')->middleware('auth'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    
    Route::resource('student','StudentController');
    Route::resource('employee','EmployeeController');      
    
});

Route::resource('student','StudentController')->only(['index','show']);
Route::resource('employee','EmployeeController')->only(['index','show']); 
 
Route::resource('post','PostController');
Route::resource('grade','GradeController');
Route::resource('child','ChildController');
Route::resource('subject','SubjectController');