@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Students</div>

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
                                 <a href="{{ route('hall_entry_fee.show', $user->id) }}" class="btn btn-info">Pay Hall Entry Fee</a>
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
