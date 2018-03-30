@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ Auth::user()->name }} Profile ( {{ Auth::user()->designation }} Account )</div>

                <div class="panel-body">
                    <h5> Name : {{ $user->name }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Email : {{ $user->email }} </h5>
                </div>


                <div class="panel-body">
                    <h5> Department : {{ $user->department }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Designation : {{ $user->designation }} </h5>
                </div>

                

                <div class="panel-body">
                    <h5> Registration Number/NID : {{ $user->registration_number }} </h5>
                </div>

                
                <div class="panel-body">
                    <h5> Roll Number/UID : {{ $user->roll_number }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Phone Number : {{ $user->phone_number }} </h5>
                </div>

               


            </div>
        </div>
    </div>
</div>
@endsection
