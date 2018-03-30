@extends('layouts.user_navbar')

@section('content')

<style>
h3 {
    text-align: center;
}
</style>

<body>

<h3 style="color:DarkBlue;">Your Room was created successfully</h3>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Room</div>

                <div class="panel-body">

               
                {!! Form::open(array('route' => 'room.store')) !!}

                    <div class="form-group">
                      {!! Form::label('building','Enter Building') !!}
                      {!! Form::text('building',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('room_number','Room Number') !!}
                      {!! Form::number('room_number',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('bed_one','First Bed') !!}
                      {!! Form::number('bed_one',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('bed_two','Second Bed') !!}
                      {!! Form::number('bed_two',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('bed_third','Third Bed') !!}
                      {!! Form::number('bed_third',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('bed_four','Fourth Bed') !!}
                      {!! Form::number('bed_four',null,['class'=>'form-control']) !!}
                    </div>

                    
                    

                    <div class="form-group">
                     
                    {!! Form::button('Create Room', ['type'=>'submit', 'class'=>'form-control']) !!}

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

</body>

@endsection
