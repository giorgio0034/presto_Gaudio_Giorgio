<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $ad_to_check=Ad::where('is_accepted',null)->first();
        return view('revisor.index',compact('ad_to_check'));
    }


}
