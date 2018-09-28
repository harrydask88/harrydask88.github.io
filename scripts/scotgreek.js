
function logMeIn(){
	 var poststr=$("#logform").serialize();
	 $.ajax({
	  type:"GET",
	  url: "scripts/sendLogDetails.php",
	  data: poststr,
	  success: function(str){
	   switch (parseInt(str)){
	    case 1:
	     alert("Error Code 1: Can't connect to server.");
		 break;
	    case 2:
	     alert("Error Code 2: Can't connect to database.");
	     break;
	    case 3:
	     alert("Error Code 3: Account access problem.");
	     break;
		default:
		 sessionStorage['username']=$('#username').val();
		 sessionStorage['user']=str;
		 window.location="../"
		 break;
	   }
	  }
	 }); 
}

function getTowns() {  // the page load function
	 var myurl="../scripts/getTowns.php";
	  $.ajax({
	   type:"GET",
	   url: myurl, dataType:'json', // a JSON object will be returned from the server.
	   success: function(towns){ // it works - we have the data!  
	    for(var i=0;i<towns.length;i++){
	     $("#towns").append('<option value="'+towns[i].town+'">'+towns[i].town+'</option>');
	    }
	   }
	  });
} 

function searchFor(band){
	window.location="results.php?band="+band;
}

function getResults(band){
	 var myurl="scripts/searchbands.php";
	  $.ajax({
	   type:"GET",
	   data: {band:band},
	   url: myurl, dataType:'json', // a JSON object will be returned from the server.
	   success: function(bands){ // it works - we have the data!  
		   for(var i=0;i<bands.length;i++){
		    $("#results").append('<tr><td>'+bands[i].bandname+'</td><td>'+bands[i].fname+' '+bands[i].lname+'</td><td>'+bands[i].town+'</td><td>'+bands[i].phone+
		    		'</td><td>'+bands[i].email);
		   }
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
function logout(){
 sessionStorage.clear();
 window.location="../";
}

function updateMe(){
 var poststr=$("#profile").serialize()+"&username="+$("#username").val();
 $.ajax({
  type: "GET",
  url: "../scripts/updateUserDetails.php",
  data: poststr,
  success: function(str){
   alert(str);
  }
 });
}