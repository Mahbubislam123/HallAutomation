@extends('layouts.user_navbar')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Room View</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Building</th>
                            <th>Room Number</th>
                            <th>First Bed</th>
                            <th>Second Bed</th>
                            <th>Third Bed</th>
                            <th>Fourth Bed</th>
                        </tr>
                    
                    
                        <tr>

                            <td> {{ $user->building }} </td>
                            <td> {{ $user->room_number }} </td>
                            <td> {{ $user->bed_one }} </td>
                            <td> {{ $user->bed_two }} </td>
                            <td> {{ $user->bed_three }} </td>
                            <td> {{ $user->bed_four }} </td>
                            
                            
                            <td>
                                <a href="{{ route('room.index') }}" class="btn btn-info">View ALL</a>
                                |
                                <a href="{{ route('room.edit', $user->id) }}" class="btn btn-info">Edit Room</a>


                            </td>

                        </tr>

                       
                    </table>
                </div>
            </div>

                <div class="col-md-6 text-right">

                   {!! Form::open(['method' => 'DELETE','route' => ['room.destroy', $user->id]]) !!}

                   {!! Form::submit('Delete Room', ['class' => 'btn btn-danger']) !!}

                   {!! Form::close() !!}

                </div>

        </div>
    </div>
</div>


@endsection
