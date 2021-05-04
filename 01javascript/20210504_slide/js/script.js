$(document).ready(function(){
    // $(".wrapper li").eq(0).animate({left:"-100%"},1000);
    // $(".wrapper li").eq(1).animate({left:"0%"},1000);
    let hi = 0;
    const banner = $(".wrapper li");
    console.log(hi)
    function slider(){
        banner.eq(hi).css("left",0).stop().animate({left:"-100%"},1000);
        hi++;
        console.log(hi)
        if(hi == 5){hi="0"}
        banner.eq(hi).css("left","100%").stop().animate({left:0},1000);
    }

    // setInterval(작명,3000);
    setInterval(slider,3000);
    
});