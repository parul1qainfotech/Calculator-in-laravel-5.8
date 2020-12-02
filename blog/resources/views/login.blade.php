<h1>Login form</h1>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
<form action="/login" class="myform" method ="post">
@csrf <!--token-->
Username<input type="text" name="username"><br><br>
@error('username')
<div>{{message}}</div>
@enderror
Password<input type="password" name="password"><br><br>
<input type="submit"name="submit" >

</form>
