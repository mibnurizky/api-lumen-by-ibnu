<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->post('/input', function(Request $request){

});

$app->post('/gotoPost','Controller@input_post');

$app->get('/gotoGet/{text}','Controller@input_get');
