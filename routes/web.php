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

Route::get('/', function () {
    return view('user.index');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/contact', function () {
    return view('user.contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user functions
Route::get('/payment', function () {
    return view('user.payment');
});
Route::get('/pay_bill', function () {
    return view('user.pay_bill');
});
// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');
// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');

Route::get('/meal_view_all', function () {
    return view('user.meal.view_all');
});
Route::get('/workout_view_all', function () {
    return view('user.workout.workout_view_all');
});

//bmis
Route::get('/bmi_all', function () {
    return view('user.bmi.bmi_all');
});

Route::get('/add_bmi', function () {
    return view('user.bmi.add_bmi');
});
Route::post('/add_bmi', 'BmiController@add_bmi')->name('add_bmi');
Route::get('/edit_bmi', function () {
    return view('user.bmi.edit_bmi');
});
Route::post('/edit_bmi', 'BmiController@edit_bmi')->name('edit_bmi');
//admin fann_get_cascade_activation_functions /manage_trainer
Route::get('/manage_user', function () {
    return view('admin.manage_user.user_list');
});
Route::get('/add_user', function () {
    return view('admin.manage_user.add_user');
});
Route::post('/add_user', 'HomeController@add_user')->name('add_user');

Route::get('manage_payment', 'PaymentController@show_all')->name('manage-payment');
//Route::get('/manage_payment', function () {
//    return view('admin.manage_payment.manage_payment');
//});

Route::get('/bann/{id}', 'HomeController@bann_user')->name('bann');
Route::get('/del_user/{id}', 'HomeController@del_user')->name('del_user');

Route::get('/add_trainer', function () {
    return view('admin.assign.add_trainer');
});
Route::get('/assign_trainer', function () {
    return view('admin.assign.assign_trainer');
});
Route::post('/assign', 'AssignController@assign_trainer')->name('assign');

//trainer ReflectionFunctionAbstract
Route::get('/manage_trainee', function () {
    return view('trainer.manage_trainee');
});
Route::get('/add_meal', function () {
    return view('trainer.add_meal');
});
Route::get('/meal_details', function () {
    return view('trainer.meal_details');
});
Route::post('/add_meal', 'MealController@add_meal')->name('add_meal');
Route::get('/view_meal', function () {
    return view('trainer.view_meal');
});
Route::get('/del_meal/{id}', 'MealController@del_meal')->name('del_meal');

//
Route::get('/workout_details', function () {
    return view('trainer.workout.workout_details');
});
Route::get('/add_workout', function () {
    return view('trainer.workout.add_workout');
});

Route::post('/add_workout', 'WorkoutController@add_workout')->name('add_workout');
Route::get('/view_workout', function () {
    return view('trainer.workout.view_workout');
});
Route::get('/del_workout/{id}', 'WorkoutController@del_workout')->name('del_workout');
//-------------------appointment -----
Route::get('/manage_appointment', function () {
    return view('user.appoinment.all');
});
Route::get('/add_appointment', function () {
    return view('user.appoinment.add');
});
Route::post('/add_appointment', 'AppoinmentController@store')->name('add_appointment');
Route::get('/del_appointment/{id}', 'AppoinmentController@del_appointment')->name('del_appointment');
//--------------------------------------------------------------------------------
Route::get('/appointment_all', function () {
    return view('trainer.appointment_all');
});

Route::get('/approve_appointment', function () {
    return view('trainer.approve');
});
Route::post('/approve_appointment', 'AppoinmentController@approve')->name('approve_appointment');

Route::get('/edit_profile', function () {
    return view('user.edit_profile');
});

Route::post('/edit_profile', 'HomeController@edit_profile')->name('edit_profile');