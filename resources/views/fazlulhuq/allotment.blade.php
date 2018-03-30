@extends('layouts.user_navbar')

@section('content')


<style>
  
h1,h2 {
    text-align: center;
}

</style>
</head>
<body>
	
<div class="container">
  <h2>Allotment Form</h2><br><br>

  <form class="form-horizontal" action="allotment_submit" method="post">

    <div class="form-group">
      <label class="control-label col-sm-4" for="student_name">Student Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="student_name" placeholder="Enter Your Name" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="father_name">Father's Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="father_name" placeholder="Enter Your Father Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="mother_name">Mother's Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="mother_name" placeholder="Enter Your Mother Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="father_occupation">Father's Occupation:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="father_occupation" placeholder="Enter Your Father Occupation">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="local_guardian_name">Local Guardian's Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="local_guardian_name" placeholder="Enter Your Local Guardian's Name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="local_guardian_address">Local Guardian's Address:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="local_guardian_address" placeholder="Enter Your Local Guardian's Address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="local_guardian_occupation">Local Guardian's Occupation:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="local_guardian_occupation" placeholder="Enter Your Local Guardian's Occupation">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="present_address">Present Address:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="present_address" placeholder="Enter Your Present Address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="permanent_address">Permanent Address:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="permanent_address" placeholder="Enter Your Permanent Address">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="first_admission_academic_year">The First Admission Class of University And Academic Year:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="first_admission_academic_year" placeholder="Enter Your First Admission Class of University And Academic Year">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="present_class_academic_year">Present Class And Academic Year:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="present_class_academic_year" placeholder="Enter Your Present Class And Academic Year" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="phone_number">Phone Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="phone_number" placeholder="Enter Your Phone Number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="subject">Subject:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="registration_number">Registration Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="registration_number" placeholder="Enter Your Registration Number" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="roll">Roll Number:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="roll" placeholder="Enter Your Roll Number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="admission_merit_list">Admission Merit List:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="admission_merit_list" placeholder="Enter Your Admission Merit List" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="admission_merit_score">Admission Merit Score:</label>
      <div class="col-sm-6">
        <input type="number" class="form-control" name="admission_merit_score" placeholder="Enter Your Admission Merit Score" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="previous_exam_name_result">Previous University Exam Name And Result:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="previous_exam_name_result" placeholder="Enter Your Previous University Exam Name And Result">
      </div>
    </div>

    
    

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    
    <div class="form-group">
      <div class="col-sm-offset-8 col-sm-10">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </form>
</div>

</body>


@endsection
