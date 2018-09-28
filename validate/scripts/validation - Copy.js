function validate(){
  var noerrors=true;
  $(".required").each(function(i){
   if($.trim($(this).val()).length==0){
	$('#s'+i).fadeIn(1000);
	 noerrors=false;

		    if(S.password.value.length < 6) {
		      alert("Error: Password must contain at least six characters!");
		      $.password.focus();
		      return false;
		    }
		   
		  } else {
		    alert("Error: Please check that you've entered and confirmed your password!");
		    form.pwd1.focus();
		    return false;
		  }

		  alert("You entered a valid password: " + form.pwd1.value);
		  return true;
		}
	 
   } else {
	$('#s'+i).fadeOut(1000);
   }
  });
  if(noerrors){
   $.ajax({
    url: "scripts/register.php", 
	success: function(str){
	 alert(str);
	 $(".required").val("");
    }
   });
  }
 }

//Validate Email
var email = $("#fremail").val();
if ((/(.+)@(.+){2,}\.(.+){2,}/.test(email)) || email=="" || email==null) { } else {
	alert(" * Invalid Email Syntax!");
}
return false;
}



function checkForm(form)
{
  
  if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
    if(form.pwd1.value.length < 6) {
      alert("Error: Password must contain at least six characters!");
      form.pwd1.focus();
      return false;
    }
   
  } else {
    alert("Error: Please check that you've entered and confirmed your password!");
    form.pwd1.focus();
    return false;
  }

  alert("You entered a valid password: " + form.pwd1.value);
  return true;
}
