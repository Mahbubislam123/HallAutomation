@extends('layouts.user_navbar')

@section('content')

<style>
h3 {
    text-align: center;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>

                <div class="panel-body">
                    <h5> Name : {{ $user->name }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Email : {{ $user->email }} </h5>
                </div>

                <div class="panel-body">
                    <h5> Registration Number : {{ $user->registration_number }} </h5>
                </div>

                <div class="panel-body">
                    <h3 style="color:DarkBlue;">Your Payment was saved successfully</h3>
                </div>


                
                <form class="form-horizontal" action="{{route('hall_utility_fee.store', $user->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    
                    
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="year">Enter Year:</label>
                    <div class="col-sm-6">
                        <input type="Number" class="form-control" name="year" placeholder="Enter Year" required="required">
                    </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hall_utility_fee">Enter Hall Utility Fee:</label>
                    <div class="col-sm-6">
                        <input type="Number" class="form-control" name="hall_utility_fee" placeholder="Enter Hall Utility Fee for one year" required="required">
                    </div>
                    </div>

                    <div class="form-group">
                    <div class="col-sm-offset-7 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>

            
                </form>

               

            </div>
        </div>
    </div>
</div>
@endsection
