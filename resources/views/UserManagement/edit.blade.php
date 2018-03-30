@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">

               
                 {!! Form::model($user, ['method' => 'PATCH','route' => ['user.update', $user->id]]) !!}


                 <div class="form-group">
                      {!! Form::label('name','Enter Name') !!}
                      {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('email','E-mail Address') !!}
                      {!! Form::text('email',null,['class'=>'form-control']) !!}
                    </div>

                    

                    <div class="form-group">
                      {!! Form::label('department','Department') !!}
                      {!! Form::text('department',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('designation','Designation') !!}
                      {!! Form::text('designation',null,['class'=>'form-control']) !!}
                    </div>

                    

                    <div class="form-group">
                      {!! Form::label('registration_number','Registration Number/NID') !!}
                      {!! Form::number('registration_number',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('roll_number','Roll Number/UID') !!}
                      {!! Form::number('roll_number',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('phone_number','Phone Number') !!}
                      {!! Form::number('phone_number',null,['class'=>'form-control']) !!}
                    </div>

                

            {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}

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
