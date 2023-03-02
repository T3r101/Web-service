<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MainModel;

class MainController extends Controller
{
    public function index(){
        return view('index',
        [
            'blogs' =>MainModel::all()
        ]
        );
    }
}
