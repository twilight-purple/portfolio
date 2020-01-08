$(document).ready(function(){
    
//	에러 animation효과
    $(".logbox>li:nth-child(3)").click(function(){
        $(".error").animate({"opacity":"1"},100,function(){
            $(".error").animate({"margin-top":"20px"},100);
        });
    });
    
});