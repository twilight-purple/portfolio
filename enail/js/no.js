//    스크롤바 내리면 gnb변경
//    var divhas = $("div").hasClass("gnb03-change");
//    var divhass = $("div").hasClass("gnb03-change02");
//    var divhasss = $("div").hasClass("gnb03-change03");
//    var divhassss = $("div").hasClass("gnb03-change04");
//    var headTop = 0;
//    var gnb03changeTop = 0;
//    var gnb03changeTopp = 0;
//    var scroll_now = 0;
//    
//    if(divhas==true){
//        $(document).scroll(function(){
//            headTop = $(".gnb01").height();
//            gnb03changeTop = $(".gnb03-change").offset().top;
//            scroll_now = $(document).scrollTop();
//            
//            if(scroll_now>headTop+10 && scroll_now<gnb03changeTop-30){
//                $("header").stop().addClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"1"});
//                $("section").css({"padding-top":"170px"});
//            }
//            else if(scroll_now>gnb03changeTop){
//                $("header").stop().addClass("gnb03");
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb04");
//                $("section").css({"padding-top":"170px"});
//            }
//            else{
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"0"});
//                $("section").css({"padding-top":"0px"});
//            }
//        });
//    }
//    if(divhas==false){
//            $(document).scroll(function(){
//            headTop = $(".gnb01").height();
//            scroll_now = $(document).scrollTop();
//            
//            if(scroll_now>headTop+10){
//                $("header").stop().addClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"1"});
//                $("section").css({"padding-top":"170px"});
//            }
//            else{
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"0"});
//                $("section").css({"padding-top":"0px"});
//            }
//        });
//    }
//    if(divhass==true){
//        $(document).scroll(function(){
//            headTop = $(".gnb01").height();
//            scroll_now = $(document).scrollTop();
//            
//            if(scroll_now>headTop+10){
//                $("header").stop().addClass("gnb03");
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"1"});
//                $("section").css({"padding-top":"170px"});
//            }
//            else{
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"0"});
//                $("section").css({"padding-top":"0px"});
//            }
//        });
//    }
//    if(divhassss==true){
//        $(document).scroll(function(){
//            headTop = $(".gnb01").height();
//            scroll_now = $(document).scrollTop();
//            
//            if(scroll_now>headTop+10){
//                $("header").stop().addClass("gnb04");
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $(".footer-top").css({"opacity":"1"});
//                $("section").css({"padding-top":"170px"});
//            }
//            else{
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"0"});
//                $("section").css({"padding-top":"0px"});
//            }
//        });
//    }
//    if(divhasss=true){
//        $(document).scroll(function(){
//            headTop = $(".gnb01").height();
//            gnb03changeTopp = $(".gnb03-change03").offset().top;
//            scroll_now = $(document).scrollTop();
//            
//            if(scroll_now>headTop+10 && scroll_now<gnb03changeTopp-40){
//                $("header").stop().addClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"1"});
//                $("section").css({"padding-top":"170px"});
//            }
//            else if(scroll_now>gnb03changeTopp-30){
//                $("header").stop().addClass("gnb04");
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("section").css({"padding-top":"170px"});
//            }
//            else{
//                $("header").stop().removeClass("gnb02");
//                $("header").stop().removeClass("gnb03");
//                $("header").stop().removeClass("gnb04");
//                $(".footer-top").css({"opacity":"0"});
//                $("section").css({"padding-top":"0px"});
//            }
//        });
//    }
//    스크롤바 내리면 gnb변경