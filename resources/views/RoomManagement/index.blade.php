@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Room</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Building</th>
                            <th>Room Number</th>
                            <th>Action</th>
                        </tr>
                    
                    @foreach($rooms as $room)
                        <tr>

                            <td> {{ $room->building }} </td>
                            <td> {{ $room->room_number }} </td>
                            <td>
                                 <a href="{{ route('room.show', $room->id) }}" class="btn btn-info">View Room</a> 
                                |
                                <a href="{{ route('room.edit', $room->id) }}" class="btn btn-info">Edit Room</a>



                            </td>

                        </tr>

                    @endforeach

                    </table>
                </div>
            </div>

            {{ link_to_route ('room.create','Add New Room', null, ['class'=>'btn btn-primary']) }}

        </div>
    </div>
</div>
@endsection
