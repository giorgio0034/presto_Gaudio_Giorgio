<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{


public function home(){

        $ads=Ad::take(6)->orderBy('created_at','desc')->get();
        return view('welcome', compact('ads'));
    }


    }

