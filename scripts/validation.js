function validate(){
  var noerrors=true;
  $(".required").each(function(i){
   if($.trim($(this).val()).length==0){
	$('#s'+i).fadeIn(1000);
	 noerrors=false;
   } else {
	$('#s'+i).fadeOut(1000);
   }
  });
  if(noerrors){
   $.ajax({
    url: "../scripts/sendUserDetails.php", 
	success: function(str){
	 alert(str);
	 $(".required").val("");
    }
   });
  }
 }

