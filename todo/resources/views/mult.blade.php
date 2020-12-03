
<!--practice -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>jQuery Get Multiple Selected Option Value</title>
<link ref="stylesheet" href="css/app.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
    $("button").click(function(){
        var countries = [];
        $.each($(".country option:selected"), function(){            
            countries.push($(this).val());
        });
        
        for(var i=0;i<countries.length;i++){
            $('.display').append(<input type="checkbox"></input>.val()='countries[i]');
           
        }
        //alert("You have selected the country - " + countries.join(", "));
    });
});
</script>
</head>
<body>
    <form>
        <label>Country:</label>
        <select class="country" multiple="multiple" size="5">
            <option>United States</option>
            <option>India</option>
            <option>United Kingdom</option>
            <option>Brazil</option>
            <option>Germany</option>
        </select>
        <button type="button">Get Values</button>
    </form>

    <form>
<select id="display">
   
</select>

    </form>
</body>
</html>
