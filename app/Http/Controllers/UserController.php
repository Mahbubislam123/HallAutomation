<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\BillInformation;



class UserController extends Controller
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
        $users = User::all();
        return view('UserManagement.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserManagement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required',
                    'password' => 'required',
                    'phone_number' => 'required',
                    'registration_number' => 'required'
                  ]);


        $input = $request->all();

        User::create($input);


        $student = User::where('email', '=', $request->email)->first();

        if($request->role_id == '2'){
            $billinfomation = new BillInformation;

            $billinfomation->user_id = $student->id;
            $billinfomation->name = $request->name;
            $billinfomation->email = $request->email;
            $billinfomation->registration_number = $request->registration_number;

            $billinfomation->save();
        }


         return view("UserManagement.message");

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $user = User::findOrFail($id);

          return view('UserManagement.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('UserManagement.edit')->withUser($user);
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
        $user = User::findOrFail($id);

       $this->validate($request, [
                    'name' => 'required',
                    'email' => 'required',
                    
                  ]);

       $input = $request->all();

       $user->fill($input)->save();

           

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
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('user.index');
    }
}
