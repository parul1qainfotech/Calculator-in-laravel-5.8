<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list </title>
    
    <script src="js/app.js"></script>
    <script src="js/todo.js"></script>
    <link ref="stylesheet" href="css/app.css">
    <link ref="stylesheet" href="asset{{('css/style.css')}}">

</head>
<body>

<div id="container">
<h2>Todo list</h2>
@csrf
<div id="project">
<ul id="main">
<li><a href="#personal">Personal</a></li>
<li><a href="#work">Work</a></li>
</ul>

<ol id="personal">
<li> <input type="checkbox">Doctor appointnment</li>
<li> <input type="checkbox">going to market</li>
</ol>

<ol id="work">
<li> <input type="checkbox">Complete documentation</li>
<li> <input type="checkbox">meet the project manager</li>
</ol>

</div>
</div>



</body>
</html>