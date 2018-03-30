@extends('layouts.user_navbar')


@section('content')


<body>

<div class="container">
  <h2 style="text-align: center;">Complain Form</h2><br><br>

  <form class="form-horizontal" action="complain_submit" method="post">

    <div class="form-group">
      <label class="control-label col-sm-3" for="name">Student Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required="required">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="subject">Subject:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="academic_year">Academic Year:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="academic_year" placeholder="Enter Your Academic Year">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="mobile">Mobile:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="mobile" placeholder="Enter Your Contact Number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="building">Building:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="building" placeholder="Enter Your Building">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="room_number">Room Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="room_number" placeholder="Enter Your Room Number" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3" for="problem">Describe Your Problem:</label>
      <div class="col-sm-6">
        <input type="textarea" class="form-control" name="problem" placeholder="Write Here ..." required>
      </div>
    </div><br>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    
    <div class="form-group">
      <div class="col-sm-offset-8 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </form>
</div>

@endsection