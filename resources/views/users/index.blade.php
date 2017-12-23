@extends('layouts/app')
@section('content')
<h2>{{'This is blade'}}</h2>
<!--{{var_dump($user_details->toArray())}}      *var_dump is just to echo data-->
<table border="1">
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
@endsection()