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
Route::get('/Advice', function (){
  return view('Advice');
});

Route::get('/dashboard', function (){
  return view('dashboard');
});

//crime
Route::get('/crimes.add', function (){
  return view('crimes.add');
});
Route::get('/crimes.show', function (){
  return view('crimes.show');
});
Route::get('/crimes.all', function (){
  return view('crimes.all');
});
Route::get('/crimes.edit', function (){
  return view('crimes.edit');
});


//crime types
Route::get('/crime_types.update', function (){
  return view('crime_types.update');
});
Route::get('/crime_types.show', function (){
  return view('crime_types.show');
});


//staff
Route::get('/staff.edit', function (){
  return view('staff.edit');
});
Route::get('/staff.show', function (){
  return view('staff.show');
});


Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

/**STAFF**/
Route::get('/staff', 'StaffController@index')->name('staff');
Route::get('staff/add', 'StaffController@add')->name('staff.add');
Route::post('/staff', 'StaffController@store')->name('staff.store');
Route::get('/staff/{id}/show', 'StaffController@show')->name('staff.show');
Route::get('/staff/{id}/edit', 'StaffController@edit')->name('staff.edit');
Route::patch('/staff/update/{id}', 'StaffController@update')->name('staff.update');
Route::delete('/staff/delete/{id}', 'StaffController@destroy')->name('staff.destroy');

/**CRIMETYPES**/
Route::get('/crime_types', 'CTController@index')->name('crime_types.all');
Route::get('crime_types/add', 'CTController@add')->name('crime_types.add');
Route::post('/crime_types', 'CTController@store')->name('crime_types.store');
Route::get('/crime_types/{id}/show', 'CTController@show')->name('crime_types.show');;
Route::get('/crime_types/{id}/edit', 'CTController@edit')->name('crime_types.edit');
Route::patch('/crime_types/update/{id}', 'CTController@update')->name('crime_types.update');
Route::delete('/crime_types/delete/{id}', 'CTController@destroy')->name('crime_types.destroy');

/**VEHICLES**/
Route::get('/vehicles', 'CTController@index')->name('vehicles.all');
Route::get('vehicles/add', 'CTController@add')->name('vehicles.add');
Route::post('/vehicles', 'CTController@store')->name('vehicles.store');
Route::get('/vehicles/{id}/show', 'CTController@show')->name('vehicles.show');;
Route::get('/vehicles/{id}/edit', 'CTController@edit')->name('vehicles.edit');
Route::patch('/vehicles/update/{id}', 'CTController@update')->name('vehicles.update');
Route::delete('/vehicles/delete/{id}', 'CTController@destroy')->name('vehicles.destroy');

/**CRIME_CATEGORY**/
Route::get('/crime_category', 'CrimeCategoryController@index')->name('crime_category.all');
Route::get('crime_category/add', 'CrimeCategoryController@add')->name('crime_category.add');
Route::post('/crime_category', 'CrimeCategoryController@store')->name('crime_category.store');
Route::get('/crime_category/{id}/show', 'CrimeCategoryController@show')->name('crime_category.show');;
Route::get('/crime_category/{id}/edit', 'CrimeCategoryController@edit')->name('crime_category.edit');
Route::patch('/crime_category/update/{id}', 'CrimeCategoryController@update')->name('crime_category.update');
Route::delete('/crime_category/delete/{id}', 'CrimeCategoryController@destroy')->name('crime_category.destroy');

/**CRIMES**/
Route::get('/crime', 'CrimeController@index')->name('crimes.all');
Route::get('crime/add', 'CrimeController@add')->name('crimes.add');
Route::post('/crime', 'CrimeController@store')->name('crimes.store');
Route::get('/crime/{id}/show', 'CrimeController@show')->name('crimes.show');;
Route::get('/crime/{id}/edit', 'CrimeController@edit')->name('crimes.edit');
Route::patch('/crime/update/{id}', 'CrimeController@update')->name('crimes.update');
Route::delete('/crime/delete/{id}', 'CrimeController@destroy')->name('crimes.destroy');

/**CRIMES**/
Route::get('/person', 'PersonController@index')->name('persons.all');
Route::get('person/add', 'PersonController@add')->name('persons.add');
Route::post('/person', 'PersonController@store')->name('persons.store');
Route::get('/person/{id}/show', 'PersonController@show')->name('persons.show');;
Route::get('/person/{id}/edit', 'PersonController@edit')->name('persons.edit');
Route::patch('/person/update/{id}', 'PersonController@update')->name('persons.update');
Route::delete('/person/delete/{id}', 'PersonController@destroy')->name('persons.destroy');
