$(document).ready(function () {
    getUsercount();
});
function slidesidenav() {
    setTimeout(() => { $(".sub_sidenavbar").find("span").css("display", "block"); }, 500);
    document.getElementById("rmuti_header").style.fontSize = "20px";
    document.getElementById("sidenav").style.width = "15%";
    setTimeout(() => { document.getElementById("grid_con_m").style.gridTemplateColumns = "15% 86%"; }, 390);
    document.getElementById("sidenav_cancel").innerHTML = "<button onclick='slidesidenav_open()'><i class='fas fa-times'></i></button>";
    $(".side_navbar").addClass("active_side_animate");
    setTimeout(() => { $(".side_navbar").removeClass("active_side_animate"); }, 500);
}

function slidesidenav_open() {
    setTimeout(() => { $(".sub_sidenavbar").find("span").css("display", "none"); }, 200);
    document.getElementById("rmuti_header").style.fontSize = "10px";
    document.getElementById("sidenav").style.width = "3%";
    document.getElementById("grid_con_m").style.gridTemplateColumns = "3% 97%";
    document.getElementById("sidenav_cancel").innerHTML = "<button onclick='slidesidenav()'><i class='fas fa-align-justify'></i></button>";
    $(".side_navbar").addClass("deactive_side_animate");
    setTimeout(() => { $(".side_navbar").removeClass("deactive_side_animate"); }, 500);
}

$( "#content" ).delegate( ".inputcfg", "focus blur", function() {
    var elem = $(this);
    var password_input = $(".password_input");
    setTimeout(function() {
        if(elem.is(":focus")&&(password_input.is(":not(:focus)"))){
            $(".inputlogin").toggleClass("shadowactive");
            $(".inputlogin").css("color","#15ff00");
        }else if(elem.is(":focus")&&(password_input.is(":focus"))){
            $(".inputlogin1").toggleClass("shadowactive");
            $(".inputlogin1").css("color","#15ff00");
        }else{
            $(".inputlogin").removeClass("shadowactive");
            $(".inputlogin1").removeClass("shadowactive");
            $(".inputlogin1").css("color","white");
            $(".inputlogin").css("color","white");
        }
    }, 0 );
  });

  function clearconsole()
 { 
   console.log(window.console);  
   if(window.console )
   {    
     console.clear();  
   }
 }
 function popuppage(){
    $("#frmae_ye").css("display" , "block");
}
function close_popup(){
    $("#frmae_ye").css("display" , "none");
}
 



