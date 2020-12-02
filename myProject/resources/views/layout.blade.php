<html>
<head>
<script src='js/app.js'></script>
<script src='https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js'></script>
<link rel="stylesheet" href='css/app.css'>
<link rel="stylesheet" href='css/custom.css'>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
<title>@yield('Home')</title>
</head>
<body>
<div class="header">
@section('header')
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Navbar</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list">UserList</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create">Create account</a>
      </li>
    </ul>
  </div>
</nav>
@show
</div>

<div class="content">
@yield('content')

</div>
@section('footer')
<div class="footer">
<h1>footer</h1>
@show
</div>
</body>
</html>