<?php
/**
 * Created by PhpStorm.
 * User: shahriar
 * Date: 3/8/19
 * Time: 7:20 PM
 */

Route::middleware('admin')->namespace('Shahriar\Cms\app\Http\Controllers')->group(function() {
    Route::get('/adminPanel/index','AdminPanelController@index');
    Route::get('/adminPanel/config',function (){
        return config('cms.url');
    });
});
