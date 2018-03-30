<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;

use App\ComplainModel;





class RequestController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    
    {
        

         $users = DB::table('complain')->get();

         return view('fazlulhuq.request',compact('users'));

    }

}
