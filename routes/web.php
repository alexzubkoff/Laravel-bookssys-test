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

Route::get('/','BooksController@index');
Route::get('/books/update/{id}','BooksController@update');
Route::post('/books/update/{id}','BooksController@update');
Route::get('book/books/update/{id}','BooksController@update');
Route::post('book/books/update/{id}','BooksController@update');
Route::get('author/books/update/{id}','BooksController@update');
Route::post('author/books/update/{id}','BooksController@update');
Route::get('/books/delete/{id}','BooksController@delete');
Route::post('/books/create','BooksController@create');
Route::get('book/books/delete/{id}','BooksController@delete');
Route::get('author/books/delete/{id}','BooksController@delete');
Route::get('/books/showbook/{id}','BooksController@showbook');
Route::get('book/books/showbook/{id}','BooksController@showbook');
Route::get('author/books/showbook/{id}','BooksController@showbook');
Route::get('/book/{bookname}','BooksController@searchbookname');
Route::get('/bookdate/{publicationdate}','BooksController@searchpublicationdate');
Route::get('/bookdate/books/showbook/{id}','BooksController@searchpublicationdate');
Route::get('/bookdate/books/showbook/{id}','BooksController@searchpublicationdate');
Route::get('/bookdate/books/update/{id}','BooksController@searchpublicationdate');
Route::get('/bookdate/books/delete/{id}','BooksController@searchpublicationdate');
Route::get('/author/{authorname}','BooksController@searchauthorname');
Route::get('autocomplete',array('as'=>'autocomplete','uses'=> 'BooksController@autocomplete'));