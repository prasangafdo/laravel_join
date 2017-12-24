@extends('layouts/app')
@section('content')
<h2>{{'This is blade'}}</h2>
<!--{{var_dump($user_details->toArray())}}      *var_dump is just to echo data-->

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">User Details</div>
  <div class="panel-body">
    <p>This table shows the details of each and every user</p>
  </div>

  <!-- Table -->
    <div class=" col-lg-6 col-lg-offset-3">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Date of Birth</th>
                <th>User Role</th>
            </tr>
            @foreach($user_details as $user)
            <tr>
                <td>{{$user->first_name." ".$user->last_name}}</td>
                <td>{{$user->user_address}}</td>
                <td>{{$user->date_of_birth}}</td>
                <td>{{$user->user_role}}</td>
            </tr>
            @endforeach
            <!--<th>- Table heading-->
            <!--<th>- Table data-->
        </table>
    </div>
</div>

@endsection()