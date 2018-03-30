<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User;

class ChangePasswordController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        return view("fazlulhuq.change_password");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'new' => 'required|min:5',
        'confirm' => 'required|same:new',
    ]);

    $newpass =($request['new']);


    $user = Auth::user();
    $user->password = $newpass;

    $user->save();
    return redirect()->intended('/change_password')->with('message','password have changed');

        


    }




}
