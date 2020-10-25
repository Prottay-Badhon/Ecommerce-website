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

Route::get('/', 'homeController@index');
Route::get('/admin','adminController@index');
Route::post('/dashboard','adminController@verify')->name('verify');
Route::get('/dashboard','superAdminController@adminAuthCheck')->name('showDashboard');
Route::get('/logout-admin','superAdminController@logout')->name('logout');

//category related route-----------------------------------------------------
Route::get('/Add-category','addCategoryController@display')->name('addCategory');
//add category
Route::post('/upload-category','addCategoryController@upload')->name('uploadCategory');


//all category
Route::get('/All-Category','categoryController@allCategory')->name('allCategory');

//edit-category
Route::get('/editCategory{id}','categoryController@editCategory');

//delete category
Route::get('/deleteCategory{id}','categoryController@deleteCategory');

//updateCategory
Route::post('/updateCategory{id}','categoryController@updateCategory');
Route::get('/productByCategory{id}','homeController@showProductByCategory');


//manufacture routes---------------------------------------------------------
Route::get('All-Manufacture/','manufactureController@showManufacture')->name('allManufacture');
Route::get('Add-Manufacture/','manufactureController@addManufacture')->name('addManufacture');
Route::post('/Upload-Manufacture','manufactureController@uploadManufacture')->name('uploadManufacture');
Route::get('/deleteManufacture{id}','manufactureController@deleteManufacture');
Route::get('/editManufacture{id}','manufactureController@editManufacture');

Route::post('/updateManufacture{id}','manufactureController@updateManufacture');
Route::get('/productByManufacture{id}','homeController@productByManufacture');
//Route::get('/shobwbyBrand{id}','manufactureController@shobwbyBrand');


//producst route------------------------------------------------------------
Route::get('Add-Product/','productController@addProduct')->name('addProduct');
Route::get('All-Product/','productController@showProduct')->name('allProduct');
Route::post('/Save-Product','productController@saveProduct')->name('saveProduct');
           //view edit delete
Route::get('/editProduct{id}','productController@editProduct');
Route::get('/deleteProduct{id}','productController@deleteProduct');
Route::get('/viewProduct{id}','productController@viewProduct');

Route::get('/inactiveProduct{id}','productController@unactive');
Route::get('/activeProduct{id}','productController@active');
Route::get('/deleteProduct{id}','productController@deleteProduct');
Route::get('/productDetails{id}','homeController@productDetails');


//slider routes------------------------------------------------------------
Route::get('/All-Slider','sliderController@allSlider')->name('allSlider');
Route::get('/Add-Slider','sliderController@addSlider')->name('addSlider');
Route::post('/Save-Slider','sliderController@saveSlider')->name('saveSlider');

Route::get('/doUnactive{id}','sliderController@unactive');
Route::get('/doActive{id}','sliderController@active');
Route::get('/deleteSlider{id}','sliderController@deleteSlider');


//cart routes--------------------------------------------------------------
Route::post('/add-to-cart{id}','cartController@showCart');
Route::post('/update-cart','cartController@updateCart');
Route::get('/display-cart','cartController@displayCart');
Route::get('/delete-cart{deleteId}','cartController@deleteCard');


//checkout routes
Route::get('/checkoutLogin','checkoutController@showLoginPage');
Route::get('/checkout','checkoutController@showCheckoutPage');


//sign up route
Route::post('/customerRegistration','checkoutController@register');
Route::get('/notRegisteredYet','checkoutController@showRegister');


//logout routes
Route::get('/logout','logoutController@logout');


//customer login routes
Route::post('/login','customerLoginController@login');
Route::get('/loginPage','customerLoginController@showLoginPage');

//shipping routes
Route::post('/insertShipping','shippingController@insertShipping');

//payment routes
Route::get('/payment','paymentController@payment');
Route::post('/insertPayment','paymentController@insertPayment');


//order route
Route::get('/manageOrder','adminOrderController@manageOrder');
Route::get('/viewOrder{id}','adminOrderController@viewOrder');

//contactUs route
Route::get('/contactUs','homeController@contactUs');
//blog page
Route::get('/blog','homeController@blog');
Route::get('/404','homeController@not_found_404');
