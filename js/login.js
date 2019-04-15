// Checking for blank fields.
function success(){ console.log("Login OK"); alert("Login Succeeded"); }

    function failure(){console.log("Login Failed");  alert("Login Failed"); }

    function always(){ console.log("Login done"); alert("Login Request done"); }

    function login(){
      $.get("jQuery-and-JavaScript-login.php",
       $("#loginForm").serialize()).done(success).fail(failure).always(always);
      return false;
    }
$(document).ready(function(){
    $("#login").click(login);
});
