@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $user->student_name}}  Seat  Application</div>

                <div class="panel-body">
                    <h5> Student Name : {{ $user->student_name }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Father's Name : {{ $user->father_name }} </h5>
                </div>


                <div class="panel-body">
                    <h5> Mother's Name : {{ $user->mother_name }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Father's Occupation : {{ $user->father_occupation }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Local Guardian's Name : {{ $user->local_guardian_name }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Local Guardian's Address : {{ $user->local_guardian_address }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Local Guardian's Occupation : {{ $user->local_guardian_occupation }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Permanent Address : {{ $user->permanent_address }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Present Address : {{ $user->present_address }} </h5>
                </div>

                <div class="panel-body">
                    <h5> The First Admission Class of University And Academic Year : {{ $user->first_admission_academic_year }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Present Class And Academic Year : {{ $user->present_class_academic_year }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Email : {{ $user->email }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Phone Number : {{ $user->phone_number }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Subject : {{ $user->subject }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Registration Number : {{ $user->registration_number }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Roll Number : {{ $user->roll }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Admission Merit List : {{ $user->admission_merit_list }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Admission Merit Score : {{ $user->admission_merit_score }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Previous University Exam Name And Result : {{ $user->previous_university_exam_name_result }} </h5>
                </div>



                <div class="col-md-12 text-right">

                   {!! Form::open(['method' => 'DELETE','route' => ['view_allotment.destroy', $user->id]]) !!}

                   {!! Form::submit('Delete Allotment', ['class' => 'btn btn-danger']) !!}

                   {!! Form::close() !!}

                </div>
                <br><br><br><br>





            </div>

            

        </div>
    </div>
</div>
@endsection
