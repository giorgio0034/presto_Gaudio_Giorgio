<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PublicController extends Controller
{


public function home(){

        $ads=Ad::where('is_accepted',true)->orderBy('created_at','desc')->take(6)->get();
        return view('welcome', compact('ads'));
    }

 public function searchAds (Request $request)

    {
        $query = $request->input('query');
        $ads = Ad::search($query)->paginate(10);
        return view('ad.searched', ['ads' => $ads, 'query' => $query]);


    }
public function setLanguage($lang)

{
    session()->put('locale',$lang);

    return redirect()->back();
}

}
