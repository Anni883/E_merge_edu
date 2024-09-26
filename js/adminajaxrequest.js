

//ajax call for login verify
function checkAdminLogin(){
  var adminLogEmail=$("#adminLogEmail").val();
  var adminLogPass=$("#adminLogPass").val();
  $.ajax({

    url:"Admin/admin.php",
    method:"post",
    data:{
      checkLogemail:"checklogmail",
      adminLogEmail:adminLogEmail,
      adminLogPass:adminLogPass,
    },
    success:function(data)
    {   if (data == 0) {
      $("#statusAdminLogMsg").html(
        '<small class="alert alert-danger"> Invalid Email ID or Password ! </small>'
      );
    } else if (data == 1) {
      $("#statusAdminLogMsg").html(
        '<div class="spinner-border text-success" role="status"></div>'
      );
// Empty Login Fields
setTimeout(() => {
  window.location.href = "Admin/admindashboard.php";
}, 1000);



    }
  },
  });
}
 
