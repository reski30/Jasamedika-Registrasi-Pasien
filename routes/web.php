<?php

use Illuminate\Support\Facades\Route;
// use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

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

    // $role = Role::find(1); //unutk mencari Role dengan id 1 kemudian harus menggunakan model nya jadi harus use
     
    // Permission
    
    // $user = auth()->user();

    // $user->syncPermissions(['edit post', 'delete post']); //mengubah permission menjadi edit delete

    // $user->revokePermissionTo('add post'); // mencabut hak akses permission pada user

    // dd($user->hasPermissionTo('edit post')); // unutk cek apakah user mempunyai hak permission untuk permission nya. hasilnya true / false 

    // $user->givePermissionTo('add post') // memberikan akses add post permission pada user yagn sedang login
    
    // Role
    
    // auth()->user()->syncRoles(['user']);

    // auth()->user()->removeRole('admin'); //menhapus Role bagi user yang sedang login

    // if(auth()->user()->hasRole('admin')) { //mengecek Role yang dimiliki oleh user yg lagi login
    //     return "mantap";
    // } 

    // auth()->user()->assignRole('admin'); //memberikan Role pada user

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//admin
Route::get('admin', 'AdminController@index')->name('admin.dashboard');
Route::get('admin/create', 'AdminController@create')->name('admin.aksi.create');
Route::post('/create', 'AdminController@store')->name('admin.create');
Route::get('admin/{id}/edit', 'AdminController@edit')->name('admin.aksi.edit');
Route::patch('/admin/{id}', 'AdminController@update');
Route::delete('admin/{id}', 'AdminController@destroy');

//operator
Route::get('operator', 'OperatorController@index')->name('operator.dashboard');
Route::get('operator/create', 'OperatorController@create')->name('operator.aksi.create');
Route::post('/create', 'OperatorController@store')->name('operator.create');
Route::get('/operator/edit/{id}', 'OperatorController@edit')->name('edit');
Route::patch('/operator/{id}', 'OperatorController@update');
Route::delete('/operator/delete/{id}', 'OperatorController@destroy');
Route::get('operator/kartu/{id}', 'OperatorController@kartu')->name('kartu');
Route::get('operator/{id}', 'OperatorController@cetak')->name('cetak');