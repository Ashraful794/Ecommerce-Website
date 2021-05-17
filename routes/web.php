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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','IndexController@index');
Route::match(['get','post'],'/contact_us','ContactFormController@contact_us');
Route::get('/products/{id}','ProductsController@products');
Route::get('/categories/{category_id}','IndexController@categories');
Route::get('/get-product-price','ProductsController@getprice');
//Route for login-register
Route::get('/login-register','UsersController@userLoginRegister');
//Route for login-User
Route::post('/user-login','UsersController@login');
//Route for add users registration
Route::post('/user-register','UsersController@register');
//Route for add users registration
Route::get('/user-logout','UsersController@logout');
//Confirm Email
Route::get('/confirm/{code}','UsersController@confirmAccount');
// Route for add to cart
Route::match(['get','post'],'add-cart','ProductsController@addtoCart');
// Route for cart
Route::match(['get','post'],'/cart','ProductsController@cart');
//Route For Delete Cart Product
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');
//Route For update Quantity
Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');
//Apply Coupon Code
Route::post('/cart/apply-coupon','ProductsController@applyCoupon');
Route::match(['get','post'],'/admin','AdminController@login');

Route::match(['get','post'],'/home','IndexController@home');


//Route for middleware after front login
Route::group(['middleware' => ['frontlogin']],function(){
//Route for users account
Route::match(['get','post'],'/account','UsersController@account');
Route::match(['get','post'],'/change-password','UsersController@changePassword');
Route::match(['get','post'],'/change-address','UsersController@changeAddress');
Route::match(['get','post'],'/checkout','ProductsController@checkout');
Route::match(['get','post'],'/order-review','ProductsController@orderReview');
Route::match(['get','post'],'/place-order','ProductsController@placeOrder');
Route::get('/thanks','ProductsController@thanks');
Route::match(['get','post'],'/stripe','ProductsController@stripe'); 
Route::get('/orders','ProductsController@userOrders');
Route::get('/orders/{id}','ProductsController@userOrderDetails');
});

Route::group(['middleware' =>['AdminLogin']],function(){
Route::match(['get','post'],'/admin/dashboard','AdminController@dashboard');
Route::match(['get','post'],'/admin/user-profile','AdminController@changePassword');
//Category Route
Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
Route::match(['get','post'],'/admin/view-categories','CategoryController@viewCategories');
Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
Route::post('/admin/update-category-status','CategoryController@updateStatus');
//Product Route
Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
Route::match(['get','post'],'/admin/view-products','ProductsController@viewProducts');
Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
Route::match(['get','post'],'/admin/delete-product/{id}','ProductsController@DeleteProduct');
Route::post('/admin/update-product-status','ProductsController@updateStatus');
Route::post('/admin/update-featured-product-status','ProductsController@updateFeatured');

//Products Attributes
Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');
Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');
Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
Route::get('/admin/delete-alt-image/{id}','ProductsController@deleteAltImage');

//Banners Route
Route::match(['get','post'],'/admin/banners','BannersController@banners');
Route::match(['get','post'],'/admin/add-banner','BannersController@addBanner');
Route::match(['get','post'],'/admin/edit-banner/{id}','BannersController@editBanner');
Route::match(['get','post'],'/admin/delete-banner/{id}','BannersController@deleteBanner');
Route::post('/admin/update-banner-status','BannersController@updateStatus');

//Coupons Route
Route::match(['get','post'],'/admin/add-coupon','CouponsController@addCoupon');
Route::match(['get','post'],'/admin/view-coupons','CouponsController@viewCoupons');
Route::match(['get','post'],'/admin/edit-coupon/{id}','CouponsController@editCoupon');
Route::get('/admin/delete-coupon/{id}','CouponsController@deleteCoupon');
Route::post('/admin/update-coupon-status','CouponsController@updateStatus');

//Orders Route
Route::get('/admin/orders','ProductsController@viewOrders');
Route::get('/admin/orders/{id}','ProductsController@viewOrderDetails');
Route::get('/admin/order-invoice/{id}','ProductsController@orderinvoice');
//Update Order Status
Route::post('/admin/update-order-status','ProductsController@updateOrderStatus');
//Customers Route
Route::get('/admin/customers','ProductsController@viewCustomers');
Route::post('/admin/update-customer-status','ProductsController@updateCustomerStatus');
Route::get('/admin/delete-customer/{id}','ProductsController@deleteCustomer');
});
Route::get('/logout','AdminController@logout');
