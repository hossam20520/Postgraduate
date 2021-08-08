<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Subject
    Route::delete('subjects/destroy', 'SubjectController@massDestroy')->name('subjects.massDestroy');
    Route::post('subjects/parse-csv-import', 'SubjectController@parseCsvImport')->name('subjects.parseCsvImport');
    Route::post('subjects/process-csv-import', 'SubjectController@processCsvImport')->name('subjects.processCsvImport');
    Route::resource('subjects', 'SubjectController');

    // Exam Results
    Route::delete('exam-results/destroy', 'ExamResultsController@massDestroy')->name('exam-results.massDestroy');
    Route::post('exam-results/parse-csv-import', 'ExamResultsController@parseCsvImport')->name('exam-results.parseCsvImport');
    Route::post('exam-results/process-csv-import', 'ExamResultsController@processCsvImport')->name('exam-results.processCsvImport');
    Route::resource('exam-results', 'ExamResultsController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Register
    Route::delete('registers/destroy', 'RegisterController@massDestroy')->name('registers.massDestroy');
    Route::post('registers/parse-csv-import', 'RegisterController@parseCsvImport')->name('registers.parseCsvImport');
    Route::post('registers/process-csv-import', 'RegisterController@processCsvImport')->name('registers.processCsvImport');
    Route::resource('registers', 'RegisterController');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
