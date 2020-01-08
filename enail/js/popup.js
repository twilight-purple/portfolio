$(document).ready(function(){
    
//    var posY = 0;
//    
//    posY = $(window).scrollTop();
//    $("html, body").addClass("not_scroll");
//    $("section").css("top",-posY);
    
    $(".popup h2 span").click(function(){
        $(".popup").stop().remove();
//        $("html, body").removeClass("not_scroll");
//        posY = $(window).scrollTop(posY);
    });
    
//    $( "#draggable" ).draggable();
    $( "#draggable" ).draggable({ containment: "html", scroll: false});
    
});