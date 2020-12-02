<h1>Calculator</h1>

<form method='post' action="/calres">
@csrf
Enter the no of input field:<input type="text" name="input">
<input type="submit" class="btn btn-primary">
</form>


<form method="post" action="/operations">
@csrf
@for($i=1;$i<=$data;$i++)
<input type="text" id="input" name="{{'input'.$i}}"/><br>
@endfor
<select name="operation">Operations
<option>Operation<option>
<option name="option" value="+">+</option>
<option name="option" value="-">-</option>
<option name="option" value="/">/</option>
<option name="option" value="*">*</option>
</select>
<input type="submit" class="btn btn-primary">

</form>
@endif