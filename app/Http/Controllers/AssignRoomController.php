<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RoomModel;

use App\User;

use DB;

use Illuminate\Support\Facades\Input;



class AssignRoomController extends Controller
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
         return view('AssignRoom.index',compact('users'));
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
    public function store(Request $request, $id)
    {
           $user = RoomModel::where('id', '=', $id)->first();

           $bed_one_reg = DB::table('users')->where('registration_number', $request->bed_one)->value('registration_number');

           $bed_two_reg = DB::table('users')->where('registration_number', $request->bed_two)->value('registration_number');

           $bed_three_reg = DB::table('users')->where('registration_number', $request->bed_three)->value('registration_number');

           $bed_four_reg = DB::table('users')->where('registration_number', $request->bed_four)->value('registration_number');



           if(isset($bed_one_reg) && $user->bed_one === 0){

               $user->bed_one = $request->bed_one;
               $user->save();

            }

            if(isset($bed_two_reg) && $user->bed_two === 0){
               $user->bed_two = $request->bed_two;
               $user->save();
            }

            if(isset($bed_three_reg) && $user->bed_three === 0){
               $user->bed_three = $request->bed_three;
               $user->save();
            }

            if(isset($bed_four_reg) && $user->bed_four === 0){
               $user->bed_four = $request->bed_four;
               $user->save();
            }

            $user = RoomModel::where('id', '=', $id)->first();

            return view('AssignRoom.show')->withUser($user);
           

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
        return view('AssignRoom.show')->withUser($user);
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
