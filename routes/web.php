<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('item_lib', function () {
		return view('pages.item_lib');
	})->name('item_lib');

	Route::get('myItems', function () {
		return view('pages.myItems');
	})->name('myItems');

	Route::get('myPackages', function () {
		return view('pages.myPackages');
	})->name('myPackages');

	Route::get('validation', function () {
		return view('pages.validation');
	})->name('validation');

	Route::get('reviewer_Management', function () {
		return view('pages.reviewer_Management');
	})->name('reviewer_Management');

	Route::get('submit_items', function () {
		return view('pages.submit_items');
	})->name('submit_items');

	Route::get('myBoardReview', function () {
		return view('pages.myBoardReview');
	})->name('myBoardReview');

	Route::get('forum', function () {
		return view('pages.forum');
	})->name('forum');

	Route::get('project', function () {
		return view('pages.project');
	})->name('project');

	Route::get('translation', function () {
		return view('pages.translation');
	})->name('translation');

	Route::get('team', function () {
		return view('pages.team');
	})->name('team');

	Route::get('documentation', function () {
		return view('pages.documentation');
	})->name('documentation');

	Route::get('itemlibcard', function () {
		return view('pages.itemlibcard');
	})->name('itemlibcard');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

