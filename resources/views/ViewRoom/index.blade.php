@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Rooms</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Building</th>
                            <th>Room Number</th>
                            <th>Action</th>
                        </tr>
                    
                    @foreach($users as $user)
                        <tr>

                            <td> {{ $user->building }} </td>
                            <td> {{ $user->room_number }} </td>
                            <td>
                                 <a href="{{ route('viewroom.show', $user->id) }}" class="btn btn-success">View Room</a> 
                                
                                


                            </td>

                        </tr>

                    @endforeach

                    </table>
                </div>
            </div>

            

        </div>
    </div>
</div>
@endsection
