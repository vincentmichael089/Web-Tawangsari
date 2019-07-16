$(".alert").hide();
$("#btnSignIn>span").hide();
$("#btnSignIn>#spanSignIn").show();

$( document ).on("click","#btnSignIn",function () {
  login();
});
$(document).on('keypress',"#inputEmail",function(e) {
  if(e.which == 13) {
    login();
  }
});
$(document).on('keypress',"#inputPassword",function(e) {
  if(e.which == 13) {
    login();
  }
});

function login(){
  if (($("#inputEmail").val()=="")||($("#inputPassword").val()=="")) {
    $("#alertSignIn").html("Please make sure you have filled all the forms");
    $("#alertSignIn").fadeIn();
    setTimeout(function () { $("#alertSignIn").fadeOut(); }, 2000);
  } else {
    var jsonSignIn = {
      "username" : $("#inputEmail").val(),
      "password" : $("#inputPassword").val()
    }
    $.ajax({
      type : "POST",
      url : "https://silsilah-app.herokuapp.com/public/api/v1/auth/login",
      contentType : 'application/json',
      data : JSON.stringify(jsonSignIn),
      beforeSend: function(){
        $("#btnSignIn>span").show();
        $("#btnSignIn>#spanSignIn").hide();
      },
      success : function (e) {
        $("#btnSignIn>span").hide();
        $("#btnSignIn>#spanSignIn").show();
        console.log(e);
        localStorage.setItem('token',e.access_token);
        $.ajax({
          type: "GET",
          beforeSend: function(request) {
            request.setRequestHeader("Authorization", localStorage.getItem("token"));
          },
          url: "https://silsilah-app.herokuapp.com/public/api/v1/get-current-user",
          success: function (e2) {
            localStorage.setItem('id',e2.result.id);
            window.location.href = "./tree.html";
          }
        });
      },
      error : function (e) {
        $("#btnSignIn>span").hide();
        $("#btnSignIn>#spanSignIn").show();  
        if (e.status==401){
          $("#alertSignIn").html("You entered wrong email or password, please try again");
          $("#alertSignIn").fadeIn();
          setTimeout(function () { $("#alertSignIn").fadeOut(); }, 3000);
        }
      }
    })
  }
}