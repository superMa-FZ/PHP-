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
		document.getElementById("collection-d2").innerHTML=xmlHttp.responseText; 
	 }

 }

  function collection(){
	 createXmlHttpRequestObject();
     var cont="collection1";
     xmlHttp.onreadystatechange=StatHandler; 
	 xmlHttp.open("GET",'collection_display.php?cont='+cont,false);
	 xmlHttp.send(null);
  }
  
  



 /*$(document).ready(function(e) {
    $("#collection-p").click(function(){
		$("#collection-p").html("<div><h1>没有符合条件的收藏</h1></div>");
	});
});*/
