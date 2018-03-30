@extends('layouts.user_navbar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Room</div>

                <div class="panel-body">

               
                 {!! Form::model($room, ['method' => 'PATCH','route' => ['room.update', $room->id]]) !!}


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
                      {!! Form::label('bed_three','Third Bed') !!}
                      {!! Form::number('bed_three',null,['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                      {!! Form::label('bed_four','Fourth Bed') !!}
                      {!! Form::number('bed_four',null,['class'=>'form-control']) !!}
                    </div>

                

            {!! Form::submit('Update Room', ['class' => 'btn btn-primary']) !!}

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
