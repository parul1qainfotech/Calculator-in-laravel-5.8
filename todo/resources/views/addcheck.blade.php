<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiselect</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link ref="stylesheet" href="asset{{'css/style.css'}}">
<style>
    #buttons{
    
    margin-top:20px;
    }

    body{
        margin:20px;
    }
</style>
</head>
<body>
    

<div class="row" style="margin-top:80px">

    <div class="col-xs-5">
    <button type="button" id="undo_redo_rightAll" class="btn btn-primary btn-block">ADD ALL<i class="glyphicon glyphicon-forward"></i></button>
        <select name="from[]" id="undo_redo" class="form-control "size="13" multiple="multiple">
            <option value="1">Red</option>
            <option value="2">Blue</option>
            <option value="3">green</option>
            <option value="4">Pink</option>
            <option value="5">Yellow</option>
            <option value="6">Orange</option>
            <option value="7">Black</option>
            <option value="8">White</option>
            <option value="9">Purple</option>
            <option value="10">Brown</option>
            
        </select>
    </div>
 
    <div class="col-xs-2" >
     
        
        <button type="button" id="undo_redo_rightSelected" class="btn btn-primary btn-block" style="margin-top:40px">ADD TO GROUP   <i class="glyphicon glyphicon-chevron-right"></i></button>
        <button type="button" id="undo_redo_leftSelected" class="btn btn-primary btn-block"style="margin-top:40px">REMOVE FROM GROUP   <i class="glyphicon glyphicon-chevron-left"></i></button>
        
      
     
    </div>
 
    <div class="col-xs-5" >
    <button type="button" id="undo_redo_leftAll" class="btn btn-primary btn-block">REMOVE ALL   <i class="glyphicon glyphicon-backward"></i></button>
        <select name="to[]" id="undo_redo_to" class="form-control" size="13" multiple="multiple"></select>
    </div>

 </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
 <script  src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/multiselect.min.js"></script>


<script>
$(document).ready(function(){

$(function() {   
  $('#undo_redo').multiselect();
 // $('select').selectpicker();

 $('.selectall').click(function(){

    $('.selectall option['selected ']')
 });

});


});
</script>
</body>
</html>