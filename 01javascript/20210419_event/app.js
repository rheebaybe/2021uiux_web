function findChecked(){
    // alert("확인");
    let found = null;
    const kcity = document.getElementsByName("city");
    // 컬렉션으로 세개를 저장함
    // kcity[0].checked //true
    // kcity[1].checked;
    // kcity[2].checked;
    // for(초기값;조건문;증감연산자){}
    // for문
    for(let i=0;i<kcity.length;i++){
        if(kcity[i].checked == true )
        // true는 예약어라서 ""를 붙이지않는다
        {
            found = kcity[i].value;
            // found는 블럭 바깥쪽에 있어서 전역변수
        }
        
    }
    alert(found);
}