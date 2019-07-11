$(document).ready(function(){
	 var $x=0;
	 $("#user").blur(function(){
     var $zhi=document.getElementById("user").value;
	 if($zhi===""){
    $("#yhm_cuowu_1").css("display","block");
	 $("#yhm_cuowu_2").css("display","none");
	 $x=0;
	    bianhuan() 
	
	 }
     else if ($zhi.length<6||$zhi.length>16){
     $("#yhm_cuowu_1").css("display","none");
      $("#yhm_cuowu_2").css("display","block");
	   $x=0;
	      bianhuan() 
     }
	 else{
		  $("#yhm_cuowu_1").css("display","none");
		  $("#yhm_cuowu_2").css("display","none");
		   $x=1;
		   bianhuan() 
		 }
	});
	$("#pasw").blur(function(){
     var $zhi=document.getElementById("pasw").value;
	 if($zhi===""){
    $("#mima_1").css("display","block");
	 $("#mima_2").css("display","none");
	  $x=0;
	     bianhuan() 
	 }
     else if ($zhi.length<6||$zhi.length>16){
     $("#mima_1").css("display","none");
      $("#mima_2").css("display","block");
	   $x=0;
	      bianhuan() 
     }
	 else{
		  $("#mima_1").css("display","none");
		  $("#mima_2").css("display","none");
		   $x=1;
		   bianhuan() 
		 }
	});
	$("#pasw2").blur(function(){
     var $zhi=document.getElementById("pasw2").value;
	 var $zhi2=document.getElementById("pasw").value;
	 if($zhi!=$zhi2){
    $("#qrmm_1").css("display","block");
	    $x=0;
		   bianhuan() 
	 }
	 else{
		  $("#qrmm_1").css("display","none");
		   $x=1;
		   bianhuan() 
		 }
	});
	$("#yzm").blur(function(){
     var $zhi=document.getElementById("yzm").value;
	 var $zhi2=yanzhengma;
	 if($zhi!=$zhi2){
    $("#yzm_1").css("display","block");
	 $x=0;
	    bianhuan()
	 }
	 else{
		  $("#yzm_1").css("display","none");
		   $x=1;
		   bianhuan() 
		 }
	});
  	function bianhuan() {
	 var $usre_pd=document.getElementById("user").value;
	  var $pswd_pd=document.getElementById("pasw").value;
	   var $pswd2_pd=document.getElementById("pasw2").value;
	    var $yzm_pd=document.getElementById("yzm").value;
	  if($x==1&&$usre_pd!=''&&$pswd_pd!=''&&$pswd2_pd!=''&&$yzm_pd!='')
	   {
		   document.getElementById("submit1").disabled = false;  
	   }
	  else
	 document.getElementById("submit1").disabled = true;
	   }
 });
