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
 
    $('.hoverx1').mouseenter(function(){
        $('.HoverAbleDiv2').stop().show();
    });
    $(".hoverx1, .HoverAbleDiv2").mouseleave(function(){
        if(!$('.HoverAbleDiv2').is(':hover')){
            $('.HoverAbleDiv2').hide();
        };
    });
    $('.hoverx2').mouseenter(function(){
        $('.HoverAbleDiv3').stop().show();
    });
    $(".hoverx2, .HoverAbleDiv3").mouseleave(function(){
        if(!$('.HoverAbleDiv3').is(':hover')){
            $('.HoverAbleDiv3').hide();
        };
    });
    $('.hoverx3').mouseenter(function(){
        $('.HoverAbleDiv4').stop().show();
    });
    $(".hoverx3, .HoverAbleDiv4").mouseleave(function(){
        if(!$('.HoverAbleDiv4').is(':hover')){
            $('.HoverAbleDiv4').hide();
        };
    });
    $('.hoverx4').mouseenter(function(){
        $('.HoverAbleDiv5').stop().show();
    });
    $(".hoverx4, .HoverAbleDiv5").mouseleave(function(){
        if(!$('.HoverAbleDiv5').is(':hover')){
            $('.HoverAbleDiv5').hide();
        };
    });
    $('.hoverx5').mouseenter(function(){
        $('.HoverAbleDiv6').stop().show();
    });
    $(".hoverx5, .HoverAbleDiv6").mouseleave(function(){
        if(!$('.HoverAbleDiv6').is(':hover')){
            $('.HoverAbleDiv6').hide();
        };
    });
   
});