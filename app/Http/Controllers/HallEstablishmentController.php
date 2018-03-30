<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Hall_Establishment_Fee;

use App\BillInformation;

use DB;

use Illuminate\Support\Facades\Input;

class HallEstablishmentController extends Controller
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
        $users = BillInformation::all();

        return view('HallEstablishmentFee.index',compact('users'));
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
           $user = BillInformation::where('id', '=', $id)->first();



           $HallEstablishmentFee = new Hall_Establishment_Fee;

           $HallEstablishmentFee->user_id = $user->user_id;

           $HallEstablishmentFee->year = $request->year;

           $HallEstablishmentFee->month = $request->month;

           $HallEstablishmentFee->hall_establishment_fee = $request->hall_establishment_fee;

           $HallEstablishmentFee->save();

           return view('HallEstablishmentFee.message')->withUser($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $user = BillInformation::findOrFail($id);

            return view('HallEstablishmentFee.show')->withUser($user);
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
