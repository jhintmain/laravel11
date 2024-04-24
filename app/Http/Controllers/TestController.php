<?php

namespace App\Http\Controllers;

use App\Models\Member;

class TestController
{
    public function __construct(
        private readonly Member $member
    )
    {
    }
    public function index()
    {
        return 'Hello World';
    }

}
