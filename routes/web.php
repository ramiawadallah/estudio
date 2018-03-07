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


MyRoute::shareVariables();
MyRoute::system();

\MyRoute::auth();
group(['prefix'=>admin,'middleware'=>'auth'],function(){

/* Language Route design */
resource('langs', 'Backend\LangController', 'admin.langs');
Route::post('admin/langs/store', array('as'=>'store_langs' ,'uses'=>'Backend\LangController@store') );
Route::post('admin/langs', array('as' => 'update_file' , 'uses' => 'Backend\LangController@updateFiles'));

  /* Settings Route design */
  resource('settings', 'Backend\SettingsController','admin.settings');

  /* Settings Route design */
  resource('users', 'Backend\UsersController','admin.usesrs');

  /* Go to Admin Route design */
  get('/', 'Backend\HomeController@index','admin.index');

  /* Language changing Route design */
  get('backend/main_settings', 'Backend\SettingsController@index','main.settings');

  /* Users Route design */
  resource('users', 'Backend\UserController','admin.users');

  /* Pages Route design */
  resource('pages', 'Backend\PageController', 'admin.pages');

  /* Portfoio Route design */
  resource('portfolios', 'Backend\PortfolioController', 'admin.portfolios');

  /* PortCat Route design */
  resource('portcats', 'Backend\PortcatController', 'admin.portcats');

  /* Gallary Route design */
  resource('gallaries', 'Backend\GallaryController', 'admin.gallaries');

  /* Post Route design */
  resource('posts', 'Backend\PostController', 'admin.posts');

  /* PostCat Route design */
  resource('postcats', 'Backend\PostcatController', 'admin.postcats');

  /* Service Route design */
  resource('services', 'Backend\ServiceController', 'admin.services');

  /* Slider Route design */
  resource('sliders', 'Backend\SliderController', 'admin.sliders');

  /* Team Route design */
  resource('teams', 'Backend\TeamController', 'admin.teams');

  /* Client Route design */
  resource('clients', 'Backend\ClientController', 'admin.clients');

  /* Testimonial Route design */
  resource('testimonials', 'Backend\TestimonialController', 'admin.testimonials');

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/findproduct/{id}','Frontend\FrontEndController@findProductName');
Route::get('/findproductinfo/{id}','Frontend\FrontEndController@findproductInfo');

/* FrontEnd Pages Route design */
Route::group(['middleware'=>'locale'], function(){
      
      /* Pages Route if Pages Table is Exists*/
      if (Schema::hasTable('pages')) {

        foreach (\App\Page::all() as $key => $page) {
        
            Route::get($page->uri, ['as'=>$page->name, function() use ($page){
                return App()->call('App\Http\Controllers\PagesController@show', [
                    'page' => $page,
                    'parameters'=> Route::current()->parameters(),
                ]);
            }]);
        }      
      } 

      /* News Route if Pages Table is Exists*/
      if (Schema::hasTable('news')) {

        foreach (\App\News::all() as $key => $news) {
        
            Route::get($news->uri, ['as'=>$news->title, function() use ($news){
                return App()->call('App\Http\Controllers\Frontend\FrontEndController@showNews', [
                    'news' => $news,
                    'parameters'=> Route::current()->parameters(),
                ]);
            }]);
        }      
      }    

      /* Management Route if Pages Table is Exists*/
      if (Schema::hasTable('managements')) {

        foreach (\App\Management::all() as $key => $manage) {
        
            Route::get($manage->uri, ['as'=>$manage->title, function() use ($manage){
                return App()->call('App\Http\Controllers\Frontend\FrontEndController@showManagement', [
                    'manage' => $manage,
                    'parameters'=> Route::current()->parameters(),
                ]);
            }]);
        }      
      }


      /* Fech Product information */

      Route::get('product/{id}','Frontend\FrontEndController@showproduct');      
});

/* Front end Locale Route design */
Route::get('setlocale/{locale}', function ($locale) {
  \Session::put('locale', $locale);
  return back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
