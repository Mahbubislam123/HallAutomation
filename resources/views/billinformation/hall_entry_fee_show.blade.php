@extends('layouts.user_navbar')

@section('content')
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
                


                <form class="form-horizontal" action="{{route('hall_entry_fee.store', $user->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    
                    
                    @if($user->hall_entry_fee === 0)

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="hall_entry_fee">Enter Hall Entry Fee:</label>
                    <div class="col-sm-6">
                        <input type="Number" class="form-control" name="hall_entry_fee" placeholder="Enter Hall Entry Fee for one time" required="required">
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-7 col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
                    

                    @else
                    <div class="panel-body">
                        <h4><b> Hall Entry Fee(One Time) : {{ $user->hall_entry_fee }} Taka Paid<b></h4>
                    </div>
                    @endif
                    
                    

                    

                </form>

                </div>

               

            </div>
        </div>
    </div>
</div>
@endsection
