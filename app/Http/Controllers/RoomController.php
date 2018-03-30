<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\RoomModel;

use Illuminate\Support\Facades\Input;

class RoomController extends Controller
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
        $rooms = RoomModel::all();
        return view('RoomManagement.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RoomManagement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = new RoomModel;

        $this->validate($request, [
                    'building' => 'required',
                    'room_number' => 'required',
                    
                  ]);


        $user->building = Input::get("building");
        $user->room_number = Input::get("room_number");
        $user->bed_one = Input::get("bed_one");
        $user->bed_two = Input::get("bed_two");
        $user->bed_three = Input::get("bed_three");
        $user->bed_four = Input::get("bed_four");

        $user->save();

        return view('RoomManagement.form_message_room');

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

          return view('RoomManagement.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = RoomModel::findOrFail($id);

        return view('RoomManagement.edit')->withRoom($room);
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
        $room = RoomModel::findOrFail($id);

       $this->validate($request, [
                    'building' => 'required',
                    'room_number' => 'required',
                    
                  ]);


        $room->building = Input::get("building");
        $room->room_number = Input::get("room_number");
        $room->bed_one = Input::get("bed_one");
        $room->bed_two = Input::get("bed_two");
        $room->bed_three = Input::get("bed_third");
        $room->bed_four = Input::get("bed_four");

        $room->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = RoomModel::findOrFail($id);

        $room->delete();

        return redirect()->route('room.index');
    }
}
