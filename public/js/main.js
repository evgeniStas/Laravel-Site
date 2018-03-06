var main = function() {
    $('.icon-menu, .icon-close').click(function() {
        ToogleMenu();
    });
};
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
$(document).ready(main);