$(document).ready(function () {


//    스무스스크롤
    window.gambitScrollWheelAmount = 25;
    window.gambitScrollKeyAmount = 30;
    window.gambitScrollDecompositionRate = 0.93;
    window.gambitUseRequestAnimationFrame = true;
//    스무스스크롤

//    메인-비쥬얼시작
    $(".balloon").stop().animate({"opacity": "1", "top": "15%"}, 1000, function () {
        $(".visual-bg").stop().animate({"opacity": "1"}, 800, function () {
            $(".menu").stop().animate({"opacity": "0.8", "left": "10px"}, 500, function () {
                $(".visual-cloud li:nth-child(1)").stop().animate({"left": "0", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(2)").stop().animate({"right": "0", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(3)").stop().animate({"left": "450", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(4)").stop().animate({"right": "200", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(5)").stop().animate({"right": "0", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(6)").stop().animate({"left": "0", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(7)").stop().animate({"right": "40%", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(8)").stop().animate({"left": "0px", "opacity": "0.7"}, 300);
                $(".visual-cloud li:nth-child(9)").stop().animate({"left": "30%", "opacity": "0.7"}, 300);
            });
        });
    });
//    메인-비쥬얼시작

//    cont2 백그라운드 시차
    $('.cont2').parallax({speed: 0.5, axis: 'y'});
    $('.cont2-2').parallax({speed: 0.3, axis: 'y'});
//    cont2 백그라운드 시차


//    cont2 텍스트 변화
    var words = document.getElementsByClassName('word');
    var wordArray = [];
    var currentWord = 0;

    words[currentWord].style.opacity = 1;
    for (var i = 0; i < words.length; i++) {
        splitLetters(words[i]);
    }

    function changeWord() {
        var cw = wordArray[currentWord];
        var nw = currentWord == words.length - 1 ? wordArray[0] : wordArray[currentWord + 1];
        for (var i = 0; i < cw.length; i++) {
            animateLetterOut(cw, i);
        }

        for (var i = 0; i < nw.length; i++) {
            nw[i].className = 'letter behind';
            nw[0].parentElement.style.opacity = 1;
            animateLetterIn(nw, i);
        }

        currentWord = (currentWord == wordArray.length - 1) ? 0 : currentWord + 1;
    }

    function animateLetterOut(cw, i) {
        setTimeout(function () {
            cw[i].className = 'letter out';
        }, i * 80);
    }

    function animateLetterIn(nw, i) {
        setTimeout(function () {
            nw[i].className = 'letter in';
        }, 340 + (i * 80));
    }

    function splitLetters(word) {
        var content = word.innerHTML;
        word.innerHTML = '';
        var letters = [];
        for (var i = 0; i < content.length; i++) {
            var letter = document.createElement('span');
            letter.className = 'letter';
            letter.innerHTML = content.charAt(i);
            word.appendChild(letter);
            letters.push(letter);
        }

        wordArray.push(letters);
    }

    changeWord();
    setInterval(changeWord, 4000);
//    cont2 텍스트 변화

    var headTop = 0;
    var scroll_now = 0;

//    top버튼
    $(document).scroll(function () {
        headTop = $(".balloon").height();
        scroll_now = $(document).scrollTop();

        if (scroll_now > headTop) {
            $(".top").addClass("on");
        }
        else {
            $(".top").removeClass("on");
        }
    });
    $(".top").click(function () {
        $("html, body").animate({scrollTop: 0}, 500);
    });
//    top버튼

//    메뉴버튼
    var offsetone = 0;
    var offsettwo = 0;
    var offsetthree = 0;
    var offsetfore = 0;
    $(".menu li").click(function () {

        var offsetlist = $(this).index();
        offsetone = $(".visual").offset().top;
        offsettwo = $(".cont1").offset().top;
        offsetthree = $(".cont2").offset().top;
        offsetfore = $(".cont3").offset().top;

        if (offsetlist == 0) {
            $("html, body").animate({scrollTop: offsetone}, 500);
        }
        if (offsetlist == 1) {
            $("html, body").animate({scrollTop: offsettwo + 50}, 500);
        }
        if (offsetlist == 2) {
            $("html, body").animate({scrollTop: offsetthree - 100}, 500);
        }
        if (offsetlist == 3) {
            $("html, body").animate({scrollTop: offsetfore + 50}, 500);
        }
    });


    $(document).scroll(function () {
        scroll_now = $(document).scrollTop();


    });
//    메뉴버튼

});