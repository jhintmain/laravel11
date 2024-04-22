<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function get(){
        return response()->json(['name' => 'John Doe']);
    }

}
