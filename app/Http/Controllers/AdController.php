<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Category;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Http\Request;

class AdController extends Controller
{

public function create(){
    return view('ad.create');
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



    public function index()
    {


        $ads=Ad::orderBy('created_at','desc')->paginate(6);
        return view('ad.index', compact('ads'));
    }

    public function show(Ad $ad){
        return view('ad.show', compact('ad'));
    }

    public function byCategory(Category $category){
        return view('ad.byCategory',['ads'=> $category->ads,'category'=> $category]);
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
