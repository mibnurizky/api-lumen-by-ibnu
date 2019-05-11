<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    //
    public function input_post(Request $request){
    	echo $request->input('text');
    }
    public function input_get($id){
    	echo $id;
    }
}
