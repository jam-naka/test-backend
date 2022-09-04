<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class TestController extends Controller
{
    public function test1(Request $request)
    {
        return Item::createData($request);
    }
}
