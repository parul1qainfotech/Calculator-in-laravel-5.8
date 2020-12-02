@extends('layout')

@section('content')
<h1>Create account </h1>
<form action="/createsubmit" method="post">
@csrf
  <div class="form-group">
  <div class="form-group">
    <label for="pwd">Name:</label>
    <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="username">
  </div>
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">submit</button>
</form>

@endsection