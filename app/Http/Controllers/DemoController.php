<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DemoController extends Controller
{
    public function index() {
        $data = User::find(1);
        return view('admin',compact('data'));
    }
}
