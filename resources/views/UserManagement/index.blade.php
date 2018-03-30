@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All User</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    
                    @foreach($users as $user)
                        <tr>

                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td>
                                 <a href="{{ route('user.show', $user->id) }}" class="btn btn-info">View User</a> 
                                |
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">Edit User</a>



                            </td>

                        </tr>

                    @endforeach

                    </table>
                </div>
                {{ link_to_route ('user.create','Add New User', null, ['class'=>'btn btn-primary']) }}
            </div>
        

        </div>
    </div>
</div>
@endsection
