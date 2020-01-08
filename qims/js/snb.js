$(document).ready(function(){
    
//snb영역
    $(".snb>li>span").click(function(){
        $(this).siblings(".snb_sub").slideToggle(300);
        $(this).toggleClass("on");
    });
//snb영역
	
});