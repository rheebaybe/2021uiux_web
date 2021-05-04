$(document).ready(function(){
    // 대상 이벤트 함수
    // 1menu
    // const oneTop = $("#v01s").offset().top;
    // const oneTwo = $("#v02s").offset().top;
    // const oneThree = $("#v03s").offset().top;
    
    // // $(".menu > a").eq(0).on("click",function(){});
    // // click=이벤트

    // $(".menu>a").eq(0).click(function(){
    //     $("html,body").animate({scrollTop:oneTop})
    //     // 0번째를 눌렀을때 top으로 이동
    // });
    // $(".menu>a").eq(1).click(function(){
    //     $("html,body").animate({scrollTop:oneTwo})
    //     // 0번째를 눌렀을때 top으로 이동
    // });
    // $(".menu>a").eq(2).click(function(){
    //     $("html,body").animate({scrollTop:oneThree})
    //     // 0번째를 눌렀을때 top으로 이동
    // });


    // for문은 eq의 반복때문에 쓴다
    // for(let i=0; i<$(".menu>a").length;i++){
    //     $(".menu>a").eq(i).click(function(){
    //         $("html,body").animate({scrollTop:$(".scene").eq(i).offset().top})
    //     });
    // }

    // tab메뉴처럼
    
    // $(".menu>a").click(function(){
    //     let t = $(this).index();        
    //     $("html,body").animate({scrollTop:$(".scene").eq(t).offset().top})
    // });

//     $(".menu>a").click(function(){
//         let t = $(this).index();
//         const st = $(".scene").eq(t).offset().top
//         $("html,body").animate({scrollTop:st});
//     });
// 

$(".menu>a").click(function(){
    let target = $(this.hash);
    console.log(target);
    const st = target.offset().top;
    $("html,body").animate({scrollTop:st})
});

});


// $(window).scroll(function(){
//     let scrollY = $(window).scrollTop();
//     if(scrollY >= $(".scene").eq(0).offset().top){
//         $(".menu>a").removeClass("active").eq(0).addClass("active")
//     }
//     if(scrollY >= $(".scene").eq(1).offset().top){
//         $(".menu>a").removeClass("active").eq(1).addClass("active")
//     }
//     if(scrollY >= $(".scene").eq(2).offset().top){
//         $(".menu>a").removeClass("active").eq(2).addClass("active")
//     }
// });

// let scrollY = $(window).scrollTop();
$(window).scroll(function(){

// for(let i=0; i<(".scene").length;i++){
//    if(scrollY>= $(".scene").eq(i).offset().top){
//        $(".menu>a").removeClass("active").eq(i).addClass("active");
//    }
// }

$(".scene").each(function(index){});
// index=매개변수 다른 단어를 써도된다 작명가능
// if(scrollY >= $(".scene").eq(index).offset().top){}
// for each문으로 줄이기 전
if(scrollY >= $(this).offset().top){
    $(".menu>a").removeClass("active").eq(index).addClass("active");
}


});
