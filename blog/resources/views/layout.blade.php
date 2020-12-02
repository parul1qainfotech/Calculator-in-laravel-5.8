<html>
<head>
<title>@yield('title')</title>
</head>
<body>
    @section('header')
    <div class="header">
    <h1>Header part</h1>
    </div>
    @show 

<div class="content">
@yield('content')
</div>
    @section('footer')
    <div class="footer"> 
    <h1>footer part</h1>
    </div>
    @show
</body>
</html>
