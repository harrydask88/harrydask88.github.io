function getSeats() {  // the page load function
	 var myurl="scripts/getseats.php";
	  $.ajax({
	   type:"GET",
	   url: myurl, dataType:'json', // a JSON object will be returned from the server.
	   success: function(bookings){ // it works - we have the data!  
		    for(var i=0;i<bookings.length;i++){
		     $("#theButtons").append('<tr><td>'+bookings[i].username+'</td><td>'+bookings[i].fname+'</td><td>'+
		    		 bookings[i].seatnum+'</td><td>'+bookings[i].email+'</td><td><input id="'+bookings[i].username+'" class="gocha" type="checkbox" onclick="sold(this)" /></td></tr>');   
		    }
		   }
		  });
	} 
function clearMe(){
	 $(".box").prop("checked",false).removeClass("gotcha");
	 $("#right").empty();
	}

function over(img){
	 $(img).attr('src','images/mine.gif');
}
function sold(img){
	if($(img).attr('onmouseover')==""){
		$(img).attr('onmouseover','over(this)').attr('onmouseout','out(this)');
		$(img).removeClass("gotcha");
	   } else {
	    $(img).attr('onmouseover','').attr('onmouseout','');
	    $(img).addClass("gotcha");
	   }
}
function out(img){
	$(img).attr('src','images/available.gif');

}

function confirm(){
var str="";
var seats = $('.gotcha');
if($(".gotcha").length>0){
$(".gotcha").each(function(){
str += this.id+" ";
});
$("#myTickets").append("<p>"+str+"</p><h2>The total cost is: £ "+seats.length*5+"</h2>");
document.getElementById('confirm').disabled = true;
}else{
alert("Please select a seat.");
document.getElementById('confirm').disabled = false;
}
}

function cancel(){
sessionStorage['tickets']='';
window.location="index.php";
}

$(function() {

	
	
});





function cancel(){ 
 sessionStorage['tickets']='';
 window.location="index.php";
}

function showLogForm(){

}

function registerMe(){
		var poststr=$("#register").serialize();
		 $.ajax({
		  type:"POST",
		  url: "../scripts/sendUserDetails.php ",
		  data: poststr,
		  success: function(str){
		   switch (parseInt(str)){
		    case 1:
		     alert("Error Code 1: Can't connect to server.");
			 break;
		    case 2:
		     alert("Error Code 2: Can't connect to database.");
			 $('#loginputs').fadeOut(500);
		     break;
		    case 3:
		     alert("Error Code 3: Account access problem.");
		     break;
		    case 4:
			 alert("Error Code 4: .");
			 break;
		    case 5:
			alert("Error Code 4: Account Already created.");
		     break;
		    default:
		        alert("You have successfully registered "+$('#username').val());
		         sessionStorage['username']=$('#username').val();
				 sessionStorage['user']=str;
				 window.location="http://localhost/1SCOTSGREEK/member/teach-yourself-greek.html";
				 break;
			   }
			  }
			 });		     
}

function logMeIn(){
	 var poststr=$("#logform").serialize();
	 $.ajax({
	  type:"POST",
	  url: "../scripts/sendLogDetails.php",
	  data: poststr,
	  success: function(str){
	   switch (parseInt(str)){
	    case 1:
	     alert("Error Code 1: Can't connect to server.");
		 break;
	    case 2:
	     alert("Error Code 2: Can't connect to database.");
		 $('#loginputs').fadeOut(500);
	     break;
	    case 3:
	     alert("Error Code 3: Account access problem.");
	     break;
	    case 4:
		 alert("Error Code 4: Account not yet created.");
		 break;
		default:
        alert("Welcome back in your favorite website "+$('#username').val());
         sessionStorage['username']=$('#username').val();
		 sessionStorage['user']=str;
		 window.location="http://localhost/1SCOTSGREEK/member/teach-yourself-greek.html";
		 $('#whome').html(str);
		 $('#logger').html('<a href="javascript:logMeOut()">Log Out</a>');
		 $('.logform').val("");
		 $('#salutation').html($('#username').val()+"'s Tickets");
		 $("#loginputs").fadeOut(500);
		 $("#nav").fadeOut(500);
		 $("#nav2").fadeIn(600);
	
		 break;
	   }
	  }
	 });

}

function checkout(){
	var poststr=$("#sendSeatDetails.php ").serialize();
	 $.ajax({
	  type:"POST",
	  url: "scripts/sendSeatDetails.php",
	  data: poststr,
	  success: function(str){
	   switch (parseInt(str)){
	    case 1:
	     alert("Error Code 1: Can't connect to server.");
		 break;
	    case 2:
	     alert("Error Code 2: Can't connect to database.");
		 $('#loginputs').fadeOut(500);
	     break;
	    case 6:
		 alert("Error Code 6: Seat Reservation Problem.");
		 break;
		default:
			window.location="http://localhost/bookings-student/thanx.php";
      		 break;
	   }
	  }
	 });

}


function logMeOut(){
	sessionStorage.clear();
	 window.location="../index.php";

}

function resetDatabase(){
 $.ajax({
  url: "scripts/resetdb.php",
  success: function(str){
   sessionStorage.clear();
   window.location="index.php";
  }
 });
}

function updateMe(){
	 var poststr=$("#profile").serialize()+"&username="+$("#username").val();
	 $.ajax({
	  type: "GET",
	  url: "scripts/updateUserDetails.php",
	  data: poststr,
	  success: function(str){
	   alert(str);
	  }
	 });
	}


function getMe(username){
	 var myurl="scripts/getmyprofile.php";
	  $.ajax({
	   type:"GET",
	   data: {username:username},
	   url: myurl, dataType:'json', // a JSON object will be returned from the server.
	   success: function(me){ // it works - we have the data!  
		$("#fname").val(me[0].fname);
		$("#lname").val(me[0].lname);
		$("#bandname").val(me[0].bandname);
		$("#address1").val(me[0].address1);
		$("#town").val(me[0].town);
		$("#county").val(me[0].county);
		$("#postcode").val(me[0].postcode);
		$("#phone").val(me[0].phone);
		$("#email").val(me[0].email);
		$("#web").val(me[0].web);
	   }
 });		
}