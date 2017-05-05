$('.procent').animate(
    {width:'100%'},
    {
        duration:3500,
        step: function(now, fx) {
            if(fx.prop == 'width') {
                $(this).html(Math.floor(now * 100) / 100 + '%');
                if(now == 100){
                    $(location).attr('href','index.php');
                }
            }
        }
    }
);