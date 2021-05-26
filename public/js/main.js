$(document).ready(function(){
    $('#dismiss, .overlay').on('click', function(){
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });
    $('#sidebarCollapse').on('click', function(){
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expand=true').attr('aria-expanded', 'false');
    });
    $('.NewIn').mouseenter(function(){
        $('.HoverAbleDiv').stop().show();
    });
    $(".NewIn, .HoverAbleDiv").mouseleave(function(){
        if(!$('.HoverAbleDiv').is(':hover')){
            $('.HoverAbleDiv').hide();
        };
    });
    $('.winter').mouseenter(function(){
        $('.HoverAbleDiv2').stop().show();
    });
    $(".winter, .HoverAbleDiv2").mouseleave(function(){
        if(!$('.HoverAbleDiv2').is(':hover')){
            $('.HoverAbleDiv2').hide();
        };
    });
    $('.tees').mouseenter(function(){
        $('.HoverAbleDiv3').stop().show();
    });
    $(".tees, .HoverAbleDiv3").mouseleave(function(){
        if(!$('.HoverAbleDiv3').is(':hover')){
            $('.HoverAbleDiv3').hide();
        };
    });
    $('.ef').mouseenter(function(){
        $('.HoverAbleDiv4').stop().show();
    });
    $(".ef, .HoverAbleDiv4").mouseleave(function(){
        if(!$('.HoverAbleDiv4').is(':hover')){
            $('.HoverAbleDiv4').hide();
        };
    });
    $('.pants').mouseenter(function(){
        $('.HoverAbleDiv5').stop().show();
    });
    $(".pants, .HoverAbleDiv5").mouseleave(function(){
        if(!$('.HoverAbleDiv5').is(':hover')){
            $('.HoverAbleDiv5').hide();
        };
    });
    $('.footwear').mouseenter(function(){
        $('.HoverAbleDiv6').stop().show();
    });
    $(".footwear, .HoverAbleDiv6").mouseleave(function(){
        if(!$('.HoverAbleDiv6').is(':hover')){
            $('.HoverAbleDiv6').hide();
        };
    });
    $('.accessories').mouseenter(function(){
        $('.HoverAbleDiv7').stop().show();
    });
    $(".accessories, .HoverAbleDiv7").mouseleave(function(){
        if(!$('.HoverAbleDiv7').is(':hover')){
            $('.HoverAbleDiv7').hide();
        };
    });
});