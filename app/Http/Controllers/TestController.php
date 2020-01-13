<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function testFunction($user_id){
        dd("test ".$user_id);
    }

}
