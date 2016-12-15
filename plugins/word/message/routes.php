<?php

Route::get('message', 'Word\Message\Controllers\FrontControllers\MessageController@index');
Route::get('report', 'Word\Message\Controllers\FrontControllers\MessageController@report');
Route::post('report/send', 'Word\Message\Controllers\FrontControllers\MessageController@send');
Route::get('message/{id}', 'Word\Message\Controllers\FrontControllers\MessageController@detail');
Route::post('verification_code','Word\Message\Controllers\FrontControllers\MessageController@sendCode');
?>
