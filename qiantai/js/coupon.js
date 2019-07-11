// JavaScript Document
 var xmlHttp;
 	 
 function createXmlHttpRequestObject(){
	if(window.ActiveXObject){
	  try{ xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		  catch(e){
			xmlHttp=false;  
		  }
	  	
	}else {
		
	  try{  xmlHttp=new XMLHttpRequest();  
		  }catch(e){
			xmlHttp=false;    
		  }
	  	
	 }
	 if(!xmlHttp)
	 alert("错误");
	 else return xmlHttp;
	 
 }  
 function StatHandler()
 {
	 if(xmlHttp.readyState==4&&xmlHttp.status==200){
		document.getElementById("coupon-d3").innerHTML=xmlHttp.responseText; 
	 }

	 
 }
 //创建一个对象
 
 /*function NIKEx(){
	 createXmlHttpRequestObject();
	 var cont="sp1";
	 xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'shuju.php?cont='+cont,false);
	 StatHandler();
	 xmlHttp.send(null);	
 }*/
 
  function already_received(){
	 createXmlHttpRequestObject();
     var cont="coupon1";
     xmlHttp.onreadystatechange=StatHandler; 
	 xmlHttp.open("GET",'coupon_display.php?cont='+cont,false);
	 xmlHttp.send(null);
  }
  
  function unclaimed(){
	 createXmlHttpRequestObject();
     var cont="coupon2";

     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'coupon_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }
  
 function already_used(){
	   createXmlHttpRequestObject();
     var cont="coupon3";
	
     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'coupon_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }
  
 function expired(){
	 createXmlHttpRequestObject();
     var cont="coupon4";
     xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'coupon_display.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
	  
  }