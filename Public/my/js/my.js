$(function(){
    var timer_serivce=null;
    var timer_value=null;
    $('#dropmenu10').mouseover(function(){

        $('.service10').css('display','block');
    });
    $('#dropmenu10').mouseout(function(){
        timer_serivce=setTimeout(function(){
          //  $('.service').css('display','none');
        },1000)
    });
    $(".service10").mouseover(function(){
        clearTimeout(timer_serivce);
        $('.service10').css('display','block');
    });
    $(".service10").mouseout(function(){
        $('.service10').css('display','none');
    });
    $('#valueid').mouseover(function(){
        $('.value').css('display','block');
    });
    $('#valueid').mouseout(function(){
        timer_value=setTimeout(function(){
            $('.value').css('display','none');
        })
    });
    $(".value").mouseover(function(){
        clearTimeout(timer_value);
        $('.value').css('display','block');
    });
    $(".value").mouseout(function(){
        $('.value').css('display','none');
    });
    $("#btn1").click(function(){
        $('#btn2').removeClass('active');
        $('#btn3').removeClass('active');
        $('#btn10').removeClass('active');

        $('#btn1').removeClass('shadow1');
        $('#btn3').removeClass('shadow1');
        $('#btn10').removeClass('shadow1');

        $(this).addClass('active');
        $('#btn2').addClass('shadow1');

        $('.right_a').addClass('right_active');
        $('.right_b').removeClass('right_active');
        $('.right_c').removeClass('right_active');
        $('.right_d').removeClass('right_active');
    })
    $("#btn2").click(function(){
        $('#btn1').removeClass('active');
        $('#btn3').removeClass('active');
        $('#btn10').removeClass('active');

        $('#btn1').removeClass('shadow1');
        $('#btn2').removeClass('shadow1');
        $('#btn10').removeClass('shadow1');

        $(this).addClass('active');
        $('#btn3').addClass('shadow1');

        $('.right_a').removeClass('right_active');
        $('.right_b').addClass('right_active');
        $('.right_c').removeClass('right_active');
        $('.right_d').removeClass('right_active');
    })
    $("#btn3").click(function(){
        $('#btn1').removeClass('active');
        $('#btn2').removeClass('active');
        $('#btn10').removeClass('active');

        $('#btn1').removeClass('shadow1');
        $('#btn2').removeClass('shadow1');
        $('#btn3').removeClass('shadow1');
        $(this).addClass('active');
        $('#btn10').addClass('shadow1');

        $('.right_a').removeClass('right_active');
        $('.right_b').removeClass('right_active');
        $('.right_c').addClass('right_active');
        $('.right_d').removeClass('right_active');
    })
    $("#btn10").click(function(){
        $('#btn1').removeClass('active');
        $('#btn2').removeClass('active');
        $('#btn3').removeClass('active');

        $('#btn1').removeClass('shadow1');
        $('#btn2').removeClass('shadow1');
        $('#btn3').removeClass('shadow1');
        $(this).addClass('active');


        $('.right_a').removeClass('right_active');
        $('.right_b').removeClass('right_active');
        $('.right_c').removeClass('right_active');
        $('.right_d').addClass('right_active');
    })
    $("#btn4").click(function(){
        $('#btn5').removeClass('active1');
        $('#btn6').removeClass('active1');

        $('#btn4').removeClass('shadow1');
        $('#btn6').removeClass('shadow1');
        $(this).addClass('active1');
        $('#btn5').addClass('shadow1');

        $('.right2_a').addClass('right_active');
        $('.right2_b').removeClass('right_active');
        $('.right2_c').removeClass('right_active');
        $('.right2_d').removeClass('right_active');
    })
    $("#btn5").click(function(){
        $('#btn4').removeClass('active1');
        $('#btn6').removeClass('active1');

        $('#btn4').removeClass('shadow1');
        $('#btn5').removeClass('shadow1');

        $(this).addClass('active1');
        $('#btn6').addClass('shadow1');

        $('.right2_a').removeClass('right_active');
        $('.right2_b').addClass('right_active');
        $('.right2_c').removeClass('right_active');
        $('.right2_d').removeClass('right_active');
    })
    $("#btn6").click(function(){
        $('#btn5').removeClass('active1');
        $('#btn4').removeClass('active1');
        $('#btn4').removeClass('shadow1');
        $('#btn5').removeClass('shadow1');

        $(this).addClass('active1');


        $('.right2_a').removeClass('right_active');
        $('.right2_b').removeClass('right_active');
        $('.right2_c').addClass('right_active');
        $('.right2_d').removeClass('right_active');
    })
    $("#btn7").click(function(){
        $('#btn8').removeClass('active');
        $('#btn9').removeClass('active');
        $('#btn11').removeClass('active');

        $('#btn7').removeClass('shadow1');
        $('#btn9').removeClass('shadow1');
        $('#btn11').removeClass('shadow1');

        $(this).addClass('active');
        $('#btn8').addClass('shadow1');

        $('.right3_a').removeClass('right_active');
        $('.right3_b').removeClass('right_active');
        $('.right3_c').addClass('right_active');
        $('.right3_d').removeClass('right_active');
    })
    $("#btn8").click(function(){
        $('#btn7').removeClass('active');
        $('#btn9').removeClass('active');
        $('#btn11').removeClass('active');

        $('#btn8').removeClass('shadow1');
        $('#btn7').removeClass('shadow1');
        $('#btn11').removeClass('shadow1');

        $(this).addClass('active');
        $('#btn9').addClass('shadow1');

        $('.right3_a').removeClass('right_active');
        $('.right3_b').addClass('right_active');
        $('.right3_c').removeClass('right_active');
        $('.right3_d').removeClass('right_active');
    })
    $("#btn9").click(function(){
        $('#btn7').removeClass('active');
        $('#btn8').removeClass('active');
        $('#btn11').removeClass('active');

        $('#btn7').removeClass('shadow1');
        $('#btn8').removeClass('shadow1');
        $('#btn9').removeClass('shadow1');

        $(this).addClass('active');
        $('#btn11').addClass('shadow1');


        $('.right3_a').removeClass('right_active');
        $('.right3_b').removeClass('right_active');
        $('.right3_c').addClass('right_active');
        $('.right3_d').removeClass('right_active');
    })
    $("#btn11").click(function(){
        $('#btn7').removeClass('active');
        $('#btn8').removeClass('active');
        $('#btn9').removeClass('active');

        $('#btn7').removeClass('shadow1');
        $('#btn8').removeClass('shadow1');
        $('#btn9').removeClass('shadow1');
        $('#btn11').removeClass('shadow1');
        $(this).addClass('active');



        $('.right3_a').removeClass('right_active');
        $('.right3_b').removeClass('right_active');
        $('.right3_c').removeClass('right_active');
        $('.right3_d').addClass('right_active');
    })
})