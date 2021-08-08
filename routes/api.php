<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Subject
    Route::apiResource('subjects', 'SubjectApiController');

    // Exam Results
    Route::apiResource('exam-results', 'ExamResultsApiController');

    // Register
    Route::apiResource('registers', 'RegisterApiController');
});
