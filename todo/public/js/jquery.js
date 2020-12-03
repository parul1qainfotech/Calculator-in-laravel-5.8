$(document).ready(function(){
    //hover
$('p').hover(function(){

    //alert($('#my').text());
});
//clicking events 
/*$('button').click(function(){

//css
$('input').css({'color':'red','background-color':'black'});
//toggle
$('p').toggleClass('main');


});*/
//keyup,keypress,keydown
$('input').keyup(function(){

$(this).css('background','red');

});


$('.click').click(function(){
$('.toggle').slideToggle('slow');
});
});