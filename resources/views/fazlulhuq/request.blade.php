@extends('layouts.user_navbar')

@section('content')


<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    text-align:center;

}
body
{
    counter-reset: Serial;           /* Set the Serial counter to 0 */
}
tr td:first-child:before
{
  counter-increment: Serial;      /* Increment the Serial counter */
  content:  counter(Serial);             /* Display the counter */
}

</style>
  
</head>
<body>
	
<div class="container">
  <h2 style="text-align: center;"> All Request Form</h2><br><br>

<table style="width:100%">
  <tr>
    <th>Serial No</th>
    <th>Name</th>
    <th>Subject</th> 
    <th>Academic Year</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Building</th>
    <th>Room Number</th>
    <th>Problem</th>
    <th>Created</th>

  
  </tr>

    @foreach($users as $user)

  <tr>
    
    <td>  </td>
    <td> {{ $user->name }} </td>
    <td> {{ $user->subject }} </td>
    <td> {{ $user->academic_year }} </td>
    <td> {{ $user->mobile }} </td>
    <td> {{ $user->email }} </td>
    <td> {{ $user->building }} </td>
    <td> {{ $user->room_number }} </td>
    <td> {{ $user->problem }} </td>
    <td> {{ $user->created_at }} </td>
    
  </tr>


    @endforeach
  
</table>


  
</div>

</body>

@endsection