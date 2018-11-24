<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
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

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

//Emplyees
Route::resource('employees', 'EmployeeController');

//search
Route::any('/search', function () {
	$search = Input::get('search');
	$employees = DB::table('employees')
		->where('name', 'like', '%' . $search . '%')
		->orWhere('email', 'LIKE', '%' . $search . '%')
		->orWhere('title', 'LIKE', '%' . $search . '%')
		->get();
	if (count($employees) > 0) {
		return view('employees.index')
			->with('employees', $employees)
			->withQuery($search);
	} else {
		return redirect('employees')->with('message', 'No Details found. Try to search again !');
	}
});
