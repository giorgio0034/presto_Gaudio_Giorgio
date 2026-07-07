<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{

public function create(){
    return view('ads.create');
}


public function store(Request $request){


dd($request->all());
//$title= $request->title;
//$price= $request->price;
//$description= $request->description;
//$category= $request->price;

//Ad::create([
    //'title'=>$request->title,
    //'price'=>$request->price,
  //  'description'=>$request->description,
//    'category'=>$request->category

 //   ]);



}


/*
    public function index()
    {
        $ads = Ad::all();// Mi recupera dal DB tutti gli articoli e li salva in una collezione
        return view('ad.index', compact('ad')

        );
    }

    /**
     * Show the form for creating a new resource.
     */
   /* public function create()
    {
        $tags = Tag::all();//recupero tutti i tag della tabella tags(SELECT * FROM tags)


        return view( 'ad.create',compact('tags'));
    }

*/
}
