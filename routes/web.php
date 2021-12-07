<?php

use App\Models\Information;
use Illuminate\Support\Facades\Artisan;
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

/******************ADMIN PANELS ROUTES****************/
Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'App\Http\Controllers\Admin'], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');
     Route::resource('comment', 'CommentController');
    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************MESSAGE ROUTES****************/
    Route::resource('message', 'MessageController');
    /******************ADMIN ROUTES****************/
      Route::resource('admin', 'AdminController');    
    /*******************Profile ROUTES*************/
    Route::view('profile', 'admin.profile.index')->name('profile.index');
        /******************Blog Category ROUTES****************/
        Route::resource('category', 'CategoryController');
        /******************Blog ROUTES****************/
        Route::resource('blog', 'BlogController');   
        /******************Information ROUTES****************/
        Route::resource('information', 'InformationController');
        /******************Product Category ROUTES****************/
        Route::resource('product_category', 'ProductCategoryController');
        /******************Product  ROUTES****************/
        Route::resource('product', 'ProductController');
        /******************Chat  ROUTES****************/
        // Route::resource('chat', 'ChatController');
        // Route::resource('chatmessage', 'ChatMessageController');
        /*******************Purchase ROUTES*************/
        // Route::view('purchase', 'admin.purchase.index')->name('purchase.index');
        /******************User  ROUTES****************/
        Route::resource('user', 'UserController');

        Route::view('order/pending', 'admin.order.pending')->name('pending.order');
        Route::view('order/completed', 'admin.order.completed')->name('completed.order');
        Route::get('order/{order}/complete','OrderController@completeOrder')->name('complete.order');
        Route::resource('order','OrderController');
        Route::resource('productImage','ProductImageController');
        Route::resource('gallery','GalleryImageController');
        Route::resource('review','ReviewController');

        // Route::
      
  });
});
/******************USER PANELS ROUTES****************/
Route::group(['prefix' => 'user', 'as'=>'user.','namespace' => 'App\Http\Controllers\User'], function () {
 
  /*******************LOGIN ROUTES*************/
  Route::post('login','AuthController@login')->name('login');
   /******************REGISTERED ROUTES****************/
  // Route::view('verification', 'user.auth.forget')->name('verification');
  Route::view('reset', 'user.auth.reset')->name('reset');
  Route::post('register','AuthController@register')->name('register');

  Route::get('forgetpassword','AuthController@forgetPassword')->name('forgetpassword');
  Route::post('forgot/password','AuthController@verification')->name('forgotpassword');
  Route::post('reset/password','AuthController@resetPassword');

  // Route::post('verification','AuthController@sendVerification')->name('verification');
  // Route::post('resetPassword','AuthController@resetPassword')->name('resetPassword');
  Route::group(['middleware' => 'auth:user'], function () { 
  /*******************Logout ROUTES*************/       
  Route::get('logout','AuthController@logout')->name('logout');
    /******************User  ROUTES****************/
    Route::resource('user', 'UserController');
  /*******************Dashoard ROUTES*************/
  Route::view('dashboard', 'user.dashboard.index')->name('dashboard.index');
  /******************Course  ROUTES****************/
  // Route::get('course/purchased','CourseController@purchased')->name('course.purchased');
  // Route::get('course/detail/{title}', 'CourseController@detail')->name('course.detail');
  // Route::get('course/section/{title}', 'CourseController@section')->name('course.section');
  // Route::get('course/files/{id}', 'CourseController@downloadFile')->name('course.file');
  // Route::resource('course', 'CourseController');
  /******************Purchase  ROUTES****************/
  // Route::resource('purchase', 'PurchaseController');
    /******************Quiz  ROUTES****************/
    // Route::view('quiz/results', 'user.quiz.results')->name('quiz.results');
    // Route::resource('quiz', 'QuizController');
    /******************PayPal  ROUTES****************/
    // Route::get('handle-payment/{id}', 'PayPalPaymentController@handlePayment')->name('make.payment');
    // Route::get('cancel-payment/{id}', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
    // Route::get('payment-success/{id}', 'PayPalPaymentController@paymentSuccess')->name('success.payment');
    /******************Chat  ROUTES****************/
    // Route::resource('chat', 'ChatController');
    // Route::resource('chatmessage', 'ChatMessageController');

    /////////////////// Order Related Routes ////////////////////
   
    Route::view('order/pending', 'user.order.pending')->name('pending.order');
    Route::view('order/completed', 'user.order.completed')->name('completed.order');
    Route::resource('order','OrderController');
});
});

/******************FRONTEND ROUTES****************/
 
Route::group(['namespace' => 'App\Http\Controllers'], function () {

Route::get('/', 'Front\PageController@home')->name('home.index');
Route::get('blogs','Front\PageController@blog')->name('blog.index');
Route::get('blogs/{title}', 'Front\PageController@showBlogNext')->name('blog.show');
Route::get('blog_category','Front\PageController@category')->name('category.index');
Route::get('category/{name}', 'Front\PageController@showCategorynext')->name('category.show');
Route::get('products','Front\PageController@products')->name('product.index');
Route::get('product/{name}', 'Front\PageController@showProductNext')->name('product.show');
Route::get('product_categories','Front\PageController@productcategory')->name('product_category.index');
Route::get('product_category/{name}', 'Front\PageController@showproductCategorynext')->name('product_category.show');
Route::get('search', 'Front\PageController@search')->name('search.show');
Route::post('search', 'Front\PageController@searchBlog')->name('search.blog');
Route::get('contact_us', 'Front\PageController@contact')->name('contact.index');
Route::post('message','Front\PageController@message')->name('message.store');
Route::get('about_us', 'Front\PageController@about')->name('about.index');
Route::get('privacy_policy', 'Front\PageController@privacy')->name('privacy.index');
Route::get('login', 'Front\PageController@login')->name('auth.login');
Route::get('sign_up', 'Front\PageController@register')->name('auth.register');
Route::get('checkout','Front\PageController@checkout')->name('checkout');

Route::get('tag/{id}/blogs','Front\PageController@shwTagNext')->name('tag.show');

Route::post('order/tracking','Front\OrderController@trackOrder')->name('order.tracking');
Route::resource('order','Front\OrderController');
Route::resource('comment','Front\CommentController');
Route::resource('payment','Front\PaymentController');
Route::resource('review','Front\ReviewController');

Route::get('transaction',function(){
  $information = Information::find(1);
  return view('front.payment.index')->with('information',$information);
});

  ////////////////////// Cart Related Routes /////////////////////////
  Route::get('cart', 'Front\CartController@cart')->name('cart');
  Route::post('cart/add', 'Front\CartController@add');
  Route::post('cart/increment', 'Front\CartController@increment');
  Route::post('cart/decrement', 'Front\CartController@decrement');
  Route::post('cart/remove', 'Front\CartController@remove');
  Route::get('cart/clear', 'Front\CartController@clear');
});

/******************FUNCTIONALITY ROUTES****************/
Route::get('/cd', function() {
    Artisan::call('config:cache');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed', [ '--class' => DatabaseSeeder::class]);
    Artisan::call('view:clear');
    return 'DONE';
});

