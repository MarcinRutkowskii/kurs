$(document).ready(function(){
    $('#tabela1 th').css({'background':'#7e7e7e','color':'white'});
    $('#tabela1 tr:odd').css('background','#00ffa7');
    $('#tabela1 tr:even').css('background','#ceff00');


    $('#tabela1 tr').mouseover(function(){
       $(this).css('background','#00ff27');
        });
    $('#tabela1 tr').mouseout(function(){
        $('#tabela1 tr:odd').css('background','#00ffa7');
        $('#tabela1 tr:even').css('background','#ceff00');
    })
});
