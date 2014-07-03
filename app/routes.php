<?php

namespace DepotWarehouse\Home;

use \Route;

Route::get('test', function() {
    return \View::make('test');
});

Route::group(array('namespace' => 'DepotWarehouse\Home\Controllers'), function() {
    Route::get('/', array('as' => 'home.index', 'uses' => 'HomeController@index'));
    Route::post('/', array('as' => 'home.mail', 'uses' => 'HomeController@mail'));
});
