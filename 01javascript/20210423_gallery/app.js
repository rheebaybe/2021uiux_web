<script src="../../js/jquery-3.1.1.min.js"></script>
$(document).ready(function(){
    $("#thumbnail li").click(function(){            
    //배열로 저장된다는 의미    
    let t = $(this).index();
    console.log(t)
    $("#imgae p").hide().eq(t).show();            

 });
    let current = 0;
    $(".right").click(function(){
      
        current++;
        if(current == 3){
           
            current = 2
           
        }
        console.log(current);
        
        imgMove();
        
    });
    $(".left").click(function(){
        
        current--;
        if(current == -1){
       
            current = 0
        }
        console.log(current);
        
        imgMove();
       
    });

    function imgMove(){
        let cNum = current * -1 * 760;
       
        $(".container>ul").stop().animate({left:cNum},1000);
       
    }

   
});