$(document).ready(function() {

  // $("#btnLogin").load("./../login.php",{
  //   username: username,
  //   pass: pass
  // });
  
  $("#btnLogin").click(test("rlara", "pass") );

  function test(user, pwd) {
    $.ajax({
      type: "GET",
      url: "./../login.php",
      data: "username="+ user +"&pass="+ pwd,
      success: function(data) {
        alert('win');
        window.location.href = "./../welcome.php";
      }
    });
  }
  

});