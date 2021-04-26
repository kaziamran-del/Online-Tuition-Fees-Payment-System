<?php

use Illuminate\Support\Facades\Route;

//---- front_end route
Route::get('/', function () {
    return view('front_end.pages.index');
});

//---- Front_end Controller
Route::get('/payment_bill', 'Front_end\Front_endController@payment_bill');
Route::get('/record/{id}', 'Front_end\Front_endController@record')->name('payment.record');

//---- TemporaryController
Route::get('front_end/preview', 'Front_end\TemporaryController@preview')->name('front_end.pages.preview');
Route::post('temporary/save', 'Front_end\TemporaryController@temporary')->name('temporary.save.data');

//---- auth route
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//---- admin route -- Data Controller
Route::get('admin/index', 'Admin\DataController@index')->name('admin.pages.index');
Route::get('admin/create', 'Admin\DataController@create')->name('admin.pages.create');
Route::post('admin/store', 'Admin\DataController@store')->name('store.data');
Route::get('admin/pages/edit/{id}', 'Admin\DataController@edit');
Route::post('admin/update', 'Admin\DataController@updateD')->name('update.data');
Route::get('admin/search', 'Admin\DataController@search')->name('admin.pages.search');

//---- admin route -- Data Controller
Route::get('admin/department/cse', 'Admin\DepartmentController@cse')->name('admin.department.cse');


//---- admin route -- RegistrationFee Controller
Route::get('admin/registrationfee/index', 'Admin\RegistrationFeeController@index')->name('admin.registration.index');
Route::get('admin/registrationfee/create', 'Admin\RegistrationFeeController@create')->name('admin.registration.create');
Route::post('admin/registrationfee/store', 'Admin\RegistrationFeeController@store')->name('regFee.store.data');
Route::get('admin/registration/edit/{id}', 'Admin\RegistrationFeeController@edit');
Route::post('admin/registration/update', 'Admin\RegistrationFeeController@updateD')->name('update.registration.data');


//---- admin route -- ShortCourse Controller
Route::get('admin/shortCourse/index', 'Admin\ShortCourseController@index')->name('admin.shortCourse.index');
Route::get('admin/shortCourse/create', 'Admin\ShortCourseController@create')->name('admin.shortCourse.create');
Route::post('admin/shortCourse/store', 'Admin\ShortCourseController@store')->name('shortCourse.store.data');
Route::get('admin/shortCourse/edit/{id}', 'Admin\ShortCourseController@edit');
Route::post('admin/shortCourse/update', 'Admin\ShortCourseController@updateD')->name('update.shortCourse.data');

//---- admin route -- LateFine Controller
Route::get('admin/lateFine/index', 'Admin\LateFineController@index')->name('admin.lateFine.index');
Route::get('admin/lateFine/create', 'Admin\LateFineController@create')->name('admin.lateFine.create');
Route::post('admin/lateFine/store', 'Admin\LateFineController@store')->name('lateFine.store.data');
Route::get('admin/lateFine/edit/{id}', 'Admin\LateFineController@edit');
Route::post('admin/lateFine/update', 'Admin\LateFineController@updateD')->name('update.lateFine.data');


//---- admin route -- Admin - Payment Controller
Route::get('admin/payment/index', 'Admin\PaymentController@index')->name('admin.payment.index');
Route::post('admin/payment/save', 'Admin\PaymentController@payments')->name('save.data');
Route::get('admin/payments/notpaid/{id}', 'Admin\PaymentController@notpaid');
Route::get('admin/payments/paid/{id}', 'Admin\PaymentController@paid');
Route::get('admin/payments/delete/{id}', 'Admin\PaymentController@delete');

//---- Payment Record Controller Record
Route::get('admin/paymentRecord/index', 'Admin\PaymentRecordController@index')->name('admin.paymentRecord.index');
Route::get('admin/paymentRecord/serch', 'Admin\PaymentRecordController@search')->name('admin.paymentRecord.search');


//---- Checkout controller for Stripe Payment Gateway
Route::get('checkout', 'CheckoutController@checkout');
Route::post('checkout', 'CheckoutController@afterpayment')->name('checkout.credit-card');

//---- Dom pdf Contoller 
Route::get('/preview-pdf', 'CustomerController@printPDF');





