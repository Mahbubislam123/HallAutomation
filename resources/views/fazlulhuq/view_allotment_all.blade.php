@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All Request</div>

                <div class="panel-body">

                    <table class="table">

                        <tr>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                    
                    @foreach($users as $user)
                        <tr>

                            <td> {{ $user->student_name }} </td>
                            <td> {{ $user->subject }} </td>
                            <td>
                                 <a href="{{ route('view_allotment.show', $user->id) }}" class="btn btn-info">View Allotment</a>



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
