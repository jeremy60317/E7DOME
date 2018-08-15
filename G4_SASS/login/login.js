function $id(id){
	return document.getElementById(id);
}	

    function showLoginForm(){
      
      if($id('spanLogin').innerHTML == "登入"){
      $id('sing_in').style.display = 'block';
      }else{  //登出
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
          if( xhr.status == 200){
            $id('MEM_NAME').innerHTML = '&nbsp';
            $id('spanLogin').innerHTML = '登入';             
          }else{
            alert( xhr.status);
          }
         
        }
        xhr.open("get","ajax_logout.php",true);
        xhr.send(null);

      }

    }//showLoginForm

    function sendForm(){
      //=====使用Ajax 回server端,取回登入者姓名, 放到頁面上    
      var xhr = new XMLHttpRequest();

      xhr.onload = function(){
        if( xhr.status == 200){  
          if( xhr.responseText == "NG"){
            alert("帳密錯誤");
          }else{
            document.getElementById("MEM_NAME").innerHTML = xhr.responseText;
            document.getElementById("spanLogin").innerHTML = "登出";  
          }

        }else{
          alert(xhr.status);
        }
      }

      xhr.open("Post", "ajax_login.php", true);
      xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
      var data_info = "MEM_ID=" + document.getElementById("MEM_ID").value 
                    + "&MEM_PSW="+ document.getElementById("MEM_PSW").value;
      xhr.send(data_info);

      //將登入表單上的資料清空，並隱藏起來
      $id('sing_in').style.display='none';
      $id('MEM_ID').value = '';
      $id('MEM_PSW').value = '';
      
    }


function close_1(){
   $id('sing_in').style.display='none';
    $id('MEM_ID').value='';
    $id('MEM_PSW').value='';
}

function close_2(){
    $id('check').innerHTML = '';  
    $id('enroll_id').value = '';
    $id('enroll_psw1').value = '';
    $id('enroll_psw2').value = '';
    $id('enroll_name').value = '';
    $id('enroll_tel').value = ''; 
    $id('enroll').style.display = 'none';
    $id('sing_in').style.display = 'none';
 

}



function show_enroll(){
   $id('enroll').style.display='block';
    $id('sing_in').style.display = 'none';
  }

  // 檢察密碼是否相同
  function check_psw(){
   var psw_1 = $id('enroll_psw1').value;
   var psw_2 = $id('enroll_psw2').value;

  if(psw_2 == psw_1){
    $id('check').innerHTML="";
    $id('enroll_send').disabled=false;
  }else{
    $id('check').innerHTML="密碼不同";
    $id('enroll_send').disabled=true;
  }


}





function check_id(){

  var xhr = new XMLHttpRequest();

  xhr.onload = function(){

     if( xhr.status == 200){  
        document.getElementById("check").innerHTML = xhr.responseText;
        }else{
          alert(xhr.status);
        
        }


  }



  var url = "check_id.php?MEM_ID=" + document.getElementById("enroll_id").value;
  xhr.open("get", url, true);
  xhr.send(null);

}




   

    // function cancelLogin(){
    //   將登入表單上的資料清空，並將燈箱隱藏起來
    //   $id('lightBox').style.display = 'none';
    //   $id('memId').value = '';
    //   $id('memPsw').value = '';
    // }

    function init(){
      
      // 登入燈箱
      $id('spanLogin').onclick = showLoginForm;

      // 登入確認
      $id('login_btn').onclick = sendForm;


      // 登入燈箱 註冊登箱 清空關閉
      $id('close_1').onclick = close_1;
      $id('close_2').onclick = close_2;

      // 顯示註冊登箱
      $id('enroll_btn').onclick = show_enroll;

    // 檢查帳號是否有重複

    // 檢察密碼是否相同
      $id('enroll_psw1').onchange = check_psw;
      $id('enroll_psw2').onchange = check_psw;

      // 檢查帳號是否有重複
      $id('enroll_id').onchange = check_id;



     
     
      
    }; //window.onload

    window.onload=init;
