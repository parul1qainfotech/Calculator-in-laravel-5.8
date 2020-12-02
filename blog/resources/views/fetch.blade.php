{{--<div>
<ul>
@foreach($data as $i)
<li>{{$i->username}}</li>
@endforeach
</ul>
</div>--}}


{{--form creation for insertion--}}
<form method="post" action="datasubmit">
@csrf
user:<input type="text" name="user">
password:<input type="password" name="password">
<input type="submit" name="submit"></
</form>