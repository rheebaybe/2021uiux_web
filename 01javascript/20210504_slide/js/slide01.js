$(document).ready(function(){
    // $(".wrapper li").eq(0).animate({left:"-100%"},1000);
    // $(".wrapper li").eq(1).animate({left:0},1000);
    // li값을 수집 배열,animate()는 메소드. 선택자 기준 
    let current = 0;
    // 현재의 값
    const banner = $(".wrapper li");

    function slider(){
        banner.eq(current).css("left",0).stop().animate({left:"-100%"},1000);
        // current=0
        current++;
        if(current == 5)
        // == 비교문
        {
            current=0
        }
        // =대입문
        banner.eq(current).css({left:"100%"}).stop().animate({left:0},1000);
        // current=1
    }

    setInterval(slider,3000);


    
});