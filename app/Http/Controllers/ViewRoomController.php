<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RoomModel;

use App\User;

use DB;

class ViewRoomController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = RoomModel::all();
        return view('ViewRoom.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $user = RoomModel::findOrFail($id);

          if($user->bed_one != 0){

             $bed1_registration_number = $user->bed_one;
             $bed1_all = DB::table('users')->where('registration_number', $bed1_registration_number)->first();

          }


          if($user->bed_two != 0){

             $bed2_registration_number = $user->bed_two;
             $bed2_all = DB::table('users')->where('registration_number', $bed2_registration_number)->first();

          }

          if($user->bed_three != 0){

             $bed3_registration_number = $user->bed_three;
             $bed3_all = DB::table('users')->where('registration_number', $bed3_registration_number)->first();

          }

          if($user->bed_four != 0){

             $bed4_registration_number = $user->bed_four;
             $bed4_all = DB::table('users')->where('registration_number', $bed4_registration_number)->first();

          }

          return view('ViewRoom.show',compact('user','bed1_all','bed2_all','bed3_all','bed4_all'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
