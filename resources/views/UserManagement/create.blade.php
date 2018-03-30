@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New User</div>

                <div class="panel-body">

               
                {!! Form::open(array('route' => 'user.store')) !!}

                    <div class="form-group">
                      {!! Form::label('name','Enter Name:') !!}
                      {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('email','Enter Email:') !!}
                      {!! Form::text('email',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('password','Password :') !!}
                      {!! Form::password('password',null, ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('department','Department:') !!}
                      {!! Form::text('department',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('designation','Designation : ') !!}
                      {!! Form::select('designation', ['Hall Officer' => 'Hall Officer', 'Student' => 'Student','House Tutor' => 'House Tutor', 'Provost' => 'Provost']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('role_id','Role :') !!}
                      {!! Form::select('role_id', ['1' => 'Hall Officer', '2' => 'Student','3' => 'House Tutor', '4' => 'Provost']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('registration_number','Registration Number/NID:') !!}
                      {!! Form::number('registration_number', 'value', ['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('roll_number','Roll Number/UID:') !!}
                      {!! Form::number('roll_number', 'value',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('phone_number','Phone Number:') !!}
                      {!! Form::number('phone_number', 'value',['class'=>'form-control']) !!}
                    </div>

                    

                    <div class="form-group">
                     
                    {!! Form::button('Create Account',['type'=>'submit','class'=>'form-control']) !!}

                    </div>


                {!! Form::close() !!}
                  
                </div>
                </div>
                

  @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


            
        </div>
    </div>
</div>
@endsection
