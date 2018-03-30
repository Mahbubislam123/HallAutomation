@extends('layouts.user_navbar')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">User View</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Reg No./NID</th>
                            <th>Roll No./UID</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    
                    
                        <tr>

                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ $user->department }} </td>
                            <td> {{ $user->designation }} </td>
                            <td> {{ $user->registration_number }} </td>
                            <td> {{ $user->roll_number }} </td>
                            <td> {{ $user->phone_number }} </td>
                            
                            <td>
                                <a href="{{ route('user.index') }}" class="btn btn-info">View ALL</a>
                                |
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Edit User</a>


                            </td>

                        </tr>

                       
                    </table>
                </div>
            </div>

                <div class="col-md-12 text-right">

                   {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id]]) !!}

                   {!! Form::submit('Delete User', ['class' => 'btn btn-danger']) !!}

                   {!! Form::close() !!}

                </div>

        </div>
    </div>
</div>


@endsection
