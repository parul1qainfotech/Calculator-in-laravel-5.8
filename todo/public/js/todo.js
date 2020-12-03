$(document).ready(function(){
//$('body').css('background-color','red');
$('#project').tabs();
$('ul').sortable({axis:'x',containment:'#project'});
$('ul').disableSelection();
$('ol').sortable({axis:'y',containment:'#project'});

});
