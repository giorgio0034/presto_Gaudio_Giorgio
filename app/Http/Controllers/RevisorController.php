<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\BecomeRevisor;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index(){
        $ad_to_check=Ad::where('is_accepted',null)->first();
        return view('revisor.index',compact('ad_to_check'));
    }

    public function accept(Ad $ad){
        $ad->setAccepted(true);
        return redirect()
        ->back()
        ->with('message',"Hai accettato l'articolo $ad->title");
    }
        public function reject(Ad $ad){
        $ad->setAccepted(false);
        return redirect()
        ->back()
        ->with('message',"Hai rifiutato l'articolo $ad->title");
    }

    public function becomeRevisor(){

    Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));

    return redirect()->route('home')->with('message','Complimenti, hai richiesto di diventare revisor');

    }

       public function makeRevisor(User $user){

       Artisan::call('app:make-user-revisor',['email' => $user->email]);
       return redirect()->back();
    }







}
