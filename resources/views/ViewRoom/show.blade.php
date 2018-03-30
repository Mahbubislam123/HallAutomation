@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Room Details</div>

                <div class="panel-body">
                    <h4> Building : {{ $user->building }} </h4>
                </div>

                <div class="panel-body">
                    <h4> Room Number : {{ $user->room_number }} </h4>
                </div>



                @if($user->bed_one === 0)
                <div class="panel-body">
                    <h4 style="color:red;"> Bed One : Available </h4>
                </div>
                @else
                <div class="panel-body">
                    <h4><b> Bed One <b></h4>
                    <h5> Name : {{ $bed1_all->name }} <h5>
                    <h5> Email : {{ $bed1_all->email }} <h5>
                    <h5> Department : {{ $bed1_all->department }} <h5>
                    <h5> Registration Number : {{ $bed1_all->registration_number }} <h5>
                </div>
                @endif


                @if($user->bed_two === 0)
                <div class="panel-body">
                    <h4 style="color:red;"> Bed Two : Available </h4>
                </div>
                @else
                <div class="panel-body">
                    <h4><b> Bed Two <b></h4>
                    <h5> Name : {{ $bed2_all->name }} <h5>
                    <h5> Email : {{ $bed2_all->email }} <h5>
                    <h5> Department : {{ $bed2_all->department }} <h5>
                    <h5> Registration Number : {{ $bed2_all->registration_number }} <h5>
                </div>
                @endif


                


                @if($user->bed_three === 0)
                <div class="panel-body">
                    <h4 style="color:red;"> Bed Three : Available </h4>
                </div>
                @else
                <div class="panel-body">
                    <h4><b> Bed Three <b></h4>
                    <h5> Name : {{ $bed3_all->name }} <h5>
                    <h5> Email : {{ $bed3_all->email }} <h5>
                    <h5> Department : {{ $bed3_all->department }} <h5>
                    <h5> Registration Number : {{ $bed3_all->registration_number }} <h5>
                </div>
                @endif


                @if($user->bed_four === 0)
                <div class="panel-body">
                    <h4 style="color:red;"> Bed Four : Available </h4>
                </div>
                @else
                <div class="panel-body">
                    <h4><b> Bed Four <b></h4>
                    <h5> Name : {{ $bed4_all->name }} <h5>
                    <h5> Email : {{ $bed4_all->email }} <h5>
                    <h5> Department : {{ $bed4_all->department }} <h5>
                    <h5> Registration Number : {{ $bed4_all->registration_number }} <h5>
                </div>
                @endif




                



            </div>
        </div>
    </div>
</div>
@endsection
