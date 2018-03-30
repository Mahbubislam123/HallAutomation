@extends('layouts.user_navbar')


@section('content')


<body>

    <div class="row">
        <div class=" col-md-offset-3 col-md-6">
            <div class="Error">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>
            </div>

    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">

            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message')}}
                </div>
            @endif

        </div>
    </div>
<div class="container">
  <h2 style="text-align: center;">Changed Your Password</h2><br><br>

  <form class="form-horizontal" action="change_password" method="post">

    <div class="form-group">
      <label class="control-label col-sm-3" for="new">New Password:</label>
      <div class="col-sm-6">
        <input type="Password" class="form-control" name="new" placeholder="Enter Your New Password" required="required">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="confirm">Confirm Password:</label>
      <div class="col-sm-6">
        <input type="Password" class="form-control" name="confirm" placeholder="Enter Your Password for confirmation">
      </div>
    </div>

    

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    
    <div class="form-group">
      <div class="col-sm-offset-5 col-sm-10">
        <button type="submit" class="btn btn-primary">Change Password</button>
      </div>
    </div>

  </form>
</div>

@endsection