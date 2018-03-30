@extends('layouts.user_navbar')




<style>
  
h3 {
    text-align: center;
}

</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> Assign Seat For Students </div>

                <div class="panel-body">
                    <h5> Building : {{ $user->building }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Room Number : {{ $user->room_number }} </h5>
                </div>


                


        @if($user->bed_one === 0 || $user->bed_two === 0 || $user->bed_three === 0 || $user->bed_four === 0)    


        <div class="panel-body">
                    <h3 style="color:Red;">Please Enter That Registration Number Which is Registered</h3>
        </div>
                
        <div class="panel-body">
                    
            <form class="form-horizontal" action="{{route('assignroom.store', $user->id)}}" method="POST">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

            
        

            @if($user->bed_one === 0)
            <div class="form-group">
                <label class="control-label col-sm-3" for="bed_one">Bed One :</label>

                <div class="col-sm-7">
                        <input type="Number" class="form-control" name="bed_one" placeholder="Enter student registration number for assign bed which is registered" >
                </div>
            </div>
            @endif

            @if($user->bed_two === 0)
            <div class="form-group">
                <label class="control-label col-sm-3" for="bed_two">Bed Two :</label>

                <div class="col-sm-7">
                        <input type="Number" class="form-control" name="bed_two" placeholder="Enter student registration number for assign bed which is registered">
                </div>
            </div>
            @endif

            
            @if($user->bed_three === 0)
            <div class="form-group">
                <label class="control-label col-sm-3" for="bed_three">Bed Three :</label>

                <div class="col-sm-7">
                        <input type="Number" class="form-control" name="bed_three" placeholder="Enter student registration number for assign bed which is registered">
                </div>
            </div>
            @endif

            @if($user->bed_four === 0)
            <div class="form-group">
                <label class="control-label col-sm-3" for="bed_four">Bed Four :</label>

                <div class="col-sm-7">
                        <input type="Number" class="form-control" name="bed_four" placeholder="Enter student registration number for assign bed which is registered">
                </div>
            </div>
            @endif

            
            <div class="form-group">
                        <div class="col-sm-offset-8 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
            </div>
            </form>

        </div>

                
        
        
        @else

        <div class="panel-body">
                    <h3 style="color:Red;">There is no seat in this Room</h3>
        </div>

        

        @endif
                



            </div>
        </div>
    </div>
</div>
@endsection
