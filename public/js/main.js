var toogle = 1;
function ToogleMenu(){
    if(toogle === 1){
        toogle = 0;
        $('.menu').animate({
            left: '0px'
        }, 200);
        $('body').animate({
            left: '80px'
        }, 200);
    }else{
        toogle = 1;
        $('.menu').animate({
            left: '-80px'
        }, 200);

        $('body').animate({
            left: '0px'
        }, 200);
    }
}
$(function () {
    $('.icon-menu, .icon-close').click(function() {
        ToogleMenu();
    });

    $( "#loginForm input" ).focus(function() {
        $(this).parent().parent().find( ".placeholder" ).addClass( "active" );
    });
    $( "#loginForm input" ).focusout(function() {
        $(this).parent().parent().find( ".placeholder" ).removeClass( "active" );
    });
    $('#newClientBtn').click(function() {
        $("#newClientBtn").remove();
        $("#newClientDiv").css("display","block");
    });


    $('#categoryList').change(function() {
        var category = $(this).val();
        if(category<1){
            $("#productsList").html("");
            return false;
        }
        $("#productsList").html("Loading");
        $.ajax({
            type:'POST',
            url:'/admin/getProducts',
            data: {category: category, _token: token},
            success:function(data){
                $("#productsList").html(data);
                $('.carusel').slick({
                    dots: true,
                    infinite: true,
                    arrows: false,
                    slidesToShow: 2,
                    adaptiveHeight: true
                });
            }
        });
    });
});