// login
function logedin(){
    var username = $("#username").val();
    var password = $("#password").val();
    var host = window.location.hostname;
    $.ajax({
          "url":"http://"+host+"/leave_management/assets/php/login.php",
          "method": "POST",
          "data":{
              username : username,
              password : password
          },
          success : function(result){
            var data = JSON.parse(result);
            var getrealdata = data[0];
            if (getrealdata.access == 0){
                alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
            }else if(getrealdata.access ==1){
                alert("ยินดีต้อนรับคุณ"+getrealdata.username);
                setTimeout(() => {  createsession(getrealdata); }, 300);
            }    
          },error : function(error){
            console.log(error);
          }

    })
}

function createsession(data){
    sessionStorage.setItem("username", data.username);
    sessionStorage.setItem("role", data.role);
    var host = window.location.hostname;
    var sessionrole = sessionStorage.getItem("role");
    if(sessionrole == 2){
        window.location.href = "http://"+host+"/leave_management/home.html";
    }else{
        alert("Your role = "+sessionrole);
    }
}
