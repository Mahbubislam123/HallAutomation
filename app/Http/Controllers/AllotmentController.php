<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AllotmentModel;

use Illuminate\Support\Facades\Input;


class AllotmentController extends Controller
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
        return view("fazlulhuq.allotment");
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
        $user = new AllotmentModel;

        
        $user->student_name = Input::get("student_name");
        $user->father_name = Input::get("father_name");
        $user->mother_name = Input::get("mother_name");
        $user->father_occupation = Input::get("father_occupation");
        $user->local_guardian_name = Input::get("local_guardian_name");
        $user->local_guardian_address = Input::get("local_guardian_address");
        $user->local_guardian_occupation= Input::get("local_guardian_occupation");
        $user->present_address = Input::get("present_address");
        $user->permanent_address = Input::get("permanent_address");
        $user->first_cls_academic_year = Input::get("first_admission_academic_year");
        $user->present_cls_academic_year = Input::get("present_class_academic_year");
        $user->email = Input::get("email");
        $user->phone_number = Input::get("phone_number");
        $user->subject = Input::get("subject");
        $user->registration_number = Input::get("registration_number");
        $user->roll = Input::get("roll");
        $user->admission_merit_list = Input::get("admission_merit_list");
        $user->admission_merit_score = Input::get("admission_merit_score");
        $user->previous_university_exam_name_result = Input::get("previous_exam_name_result");
        

        $user->save();

        return view("fazlulhuq.form_message_allotment");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
