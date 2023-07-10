<?php


use Illuminate\Support\Facades\Route;
// Route::group(['middleware' => ['api','auth:admin'], 'prefix' => 'admin'], function ($router) {

//     Route::group(['middleware' => ['canAny:manger-permission,supervisor-permission'], 'prefix' => 'permission'],
//         function (){
//         Route::post('myData', 'App\Http\Controllers\Api\Admin\adminController@myData');
//         Route::post('doctorData/{doctor_id}', 'App\Http\Controllers\Api\DoctorController@show');
//         });

//     Route::post('login', 'App\Http\Controllers\Api\Admin\adminController@login')->withoutMiddleware('auth:admin');
//     Route::post('register', 'App\Http\Controllers\Api\Admin\adminController@register')->withoutMiddleware('auth:admin');
//     Route::post('logout', 'App\Http\Controllers\Api\Admin\adminController@logout');
//     Route::post('refresh', 'App\Http\Controllers\Api\Admin\adminController@refresh');
//     Route::post('authorization', 'App\Http\Controllers\Api\Admin\adminController@authorization');
//     Route::post('doctorData/{doctor_id}', 'App\Http\Controllers\Api\DoctorController@myData');

// });

Route::group(['middleware' => ['api', 'auth:admin'], 'prefix' => 'center'], function ($router) {

    Route::post('login', 'App\Http\Controllers\Api\Admin\AdminController@login')->withoutMiddleware('auth:admin')->name('admin.login');
    Route::post('logout', 'App\Http\Controllers\Api\Admin\AdminController@logout');

    Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@store')->withoutMiddleware(['auth:admin']);
    Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@show')->withoutMiddleware('auth:admin');
    Route::post('edit', '\App\Http\Controllers\Api\Admin\CenterController@update');
    Route::post('deleteMyAccount', '\App\Http\Controllers\Api\Admin\CenterController@destroy');
    Route::post('myData', '\App\Http\Controllers\Api\Admin\CenterController@myData');
    Route::post('myAdmins', '\App\Http\Controllers\Api\Admin\CenterController@myAdmins');
    Route::post('myClients', '\App\Http\Controllers\Api\Admin\CenterController@myClients');
    Route::post('myEmployees', '\App\Http\Controllers\Api\Admin\CenterController@myEmployees');
    Route::post('myInsuranceCompanies', '\App\Http\Controllers\Api\Admin\CenterController@myInsuranceCompanies');
    Route::post('myReports', '\App\Http\Controllers\Api\Admin\CenterController@myReports');
    Route::post('doctors/add', '\App\Http\Controllers\Api\Admin\CenterController@addDoctor');
    Route::post('patients/add', '\App\Http\Controllers\Api\Admin\CenterController@addPatient');
    Route::post('labs/add', '\App\Http\Controllers\Api\Admin\CenterController@addLab');
    Route::post('pharmacies/add', '\App\Http\Controllers\Api\Admin\CenterController@addPharmacy');
    Route::post('doctors/remove/{id}', '\App\Http\Controllers\Api\Admin\CenterController@removeDoctor');
    Route::post('patients/remove/{id}', '\App\Http\Controllers\Api\Admin\CenterController@removePatient');
    Route::post('labs/remove/{id}', '\App\Http\Controllers\Api\Admin\CenterController@removeLab');
    Route::post('pharmacies/remove/{id}', '\App\Http\Controllers\Api\Admin\CenterController@removePharmacy');

    Route::group(['middleware' => ['api'], 'prefix' => 'admin'], function ($router) {
        Route::post('add', 'App\Http\Controllers\Api\Admin\AdminController@register');
        Route::post('myData', 'App\Http\Controllers\Api\Admin\AdminController@myData');
        Route::post('refresh', 'App\Http\Controllers\Api\Admin\AdminController@refresh');
        Route::post('show/{id}', 'App\Http\Controllers\Api\Admin\AdminController@show');
        Route::post('update/{id}', 'App\Http\Controllers\Api\Admin\AdminController@update');
        Route::post('delete/{id}', 'App\Http\Controllers\Api\Admin\AdminController@delete');
    });

    Route::group(['middleware' => ['api'], 'prefix' => 'department'], function ($router) {
        Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@createDepartment');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@showDepartment');
        Route::post('edit/{id}', '\App\Http\Controllers\Api\Admin\CenterController@updateDepartment');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\CenterController@deleteDepartment');
    });

    Route::group(['middleware' => ['api'], 'prefix' => 'insuranceCompany'], function ($router) {
        Route::post('save', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@store');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@show');
        Route::post('edit/{id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@update');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@destroy');
        Route::post('addPatient/{insuranceC_id}/{patient_id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@addPatient');
        Route::post('removePatient/{id}', '\App\Http\Controllers\Api\Admin\InsuranceCompanyController@removePatient');
    });

    Route::group(['middleware' => ['api'], 'prefix' => 'client'], function ($router) {
        Route::post('save', 'App\Http\Controllers\Api\Admin\ClientController@store');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ClientController@show');
        Route::post('edit/{id}', '\App\Http\Controllers\Api\Admin\ClientController@update');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ClientController@destroy');
    });

    Route::group(['prefix' => 'employee'], function ($router) {
        Route::post('save', 'App\Http\Controllers\Api\Admin\EmployeeController@store');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@show');
        Route::post('edit/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@update');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\EmployeeController@destroy');
    });

    Route::group(['middleware' => ['api'], 'prefix' => 'service'], function ($router) {
        Route::post('save', '\App\Http\Controllers\Api\Admin\CenterController@createService');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\CenterController@showService');
        Route::post('edit/{id}', '\App\Http\Controllers\Api\Admin\CenterController@updateService');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\CenterController@deleteService');
    });

    Route::group(['middleware' => ['api'], 'prefix' => 'invoice'], function ($router) {
        Route::post('save', '\App\Http\Controllers\Api\Admin\InvoiceController@store');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@show');
        //            Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@update');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\InvoiceController@destroy');
    });


    Route::group(['middleware' => ['api'], 'prefix' => 'expense'], function ($router) {
        Route::post('save', '\App\Http\Controllers\Api\Admin\ExpenseController@store');
        Route::post('show/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@show');
        Route::post('update/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@update');
        Route::post('delete/{id}', '\App\Http\Controllers\Api\Admin\ExpenseController@destroy');
    });
});
