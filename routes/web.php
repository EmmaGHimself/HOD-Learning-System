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
//Pages Links
Route::get('/', 'PagesController@getHome'); // The HomePage
Route::get('/about', 'PagesController@getAboutUs'); // The About Us Page
Route::get('/courses', 'PagesController@getCourses'); // The Courses Page
Route::get('/gallery', 'PagesController@getGallery'); // The Gallery Page
Route::get('/blog', 'PagesController@getBlog'); // The Blog Page
Route::get('/blog-single', 'PagesController@getBlogSingle'); //The Single Blog Page
Route::get('/online-classes', 'PagesController@getOnlineClasses'); //The Online Classes Page

Route::get('/course-pattern-making', 'PagesController@getPatternMaking');


//Courses Links
Route::get('/course-men-and-women-wear', 'CoursesController@getMenAndWomenWear'); //Get Men and Womenwear Page
Route::get('/course-selected-womenwear-draping', 'CoursesController@getSelectedWomenWearAndDraping'); //Get Selected Womenwear and Draping Page
Route::get('/course-selected-womenwear-and-bridal', 'CoursesController@getSelectedWomenWearAndBridal'); // Get Selected Womenwear and Bridal
Route::get('/course-courtesy-and-bra-making', 'CoursesController@getCourtesyAndBraMaking'); // Get Courtesy and Bra Making Page
Route::get('/course-dresses-on-strech-fabric', 'CoursesController@getDressesOnStretchAndFabric'); // Get Dresses On Stretch and Fabric Page
Route::get('/course-women-tops-and-blouses', 'CoursesController@getWomenTopsAndBlouses'); // Get Women Tops and Blouses Page
Route::get('/course-ladies-suit-jackets', 'CoursesController@getLadiesSuitJackets'); // Get Ladies Suit Jackets Page
Route::get('/course-womenwear-and-skirts', 'CoursesController@getWomenwearAndSkirts'); // Get Womenwear and Skirts Page
Route::get('/course-men-wear-on-pants', 'CoursesController@getMenWearsOnPants'); // Get Men Wears On Pants Page
Route::get('/course-men-shirt', 'CoursesController@getMenShirt'); // Get Men Shirt Page
Route::get('/course-men-and-women-draping', 'CoursesController@getMenAndWomenwearDraping'); // Get Men and Women Draping Page


//Auth Links
Route::get('/login', 'LoginController@getLogin');
Route::get('/register', 'LoginController@getRegister');

Route::get('contact', 'ContactUsController@contactUS');
Route::post('contact', ['as'=>'contactus.store','uses'=>'ContactUsController@contactSaveData']);