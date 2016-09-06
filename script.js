/**
 * Created by CORDELIA on 05-Sep-16.
 */

(function ($) {
    $('input[type=submit]').on('click',function (e){
        var name = $('input#name').val(),
            shout = $('input#shoutText').val(),
            date = getDate(),
            dataString = 'name='+name+'&shout='+shout+'&date='+date;

        if(name == '' || shout == ''){
           alert('Must fill both fields [name + shout]');
            //alert(date);
        }else{
            $.ajax({
                type:"post",
                url:"inc/shoutbox.php",
                data: dataString,
                cache: false,
                success: function(html){
                    $('#shouts ul').prepend(html);
                }
            });
        }

        e.preventDefault();
    });
})(jQuery);

function getDate(){
    var date = new Date(),
        month = date.getMonth() +1;
    date = date.getDate()+"-"+month+"-"+date.getFullYear();
    return date;
}
