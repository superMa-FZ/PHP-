  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
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
 
 function NIKEx(){
	 createXmlHttpRequestObject();
	 var cont="sp1";
	 xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'shuju.php?cont='+cont,false);
	 StatHandler();
	 xmlHttp.send(null);	
 }
 
  function ADIDASs(){
		createXmlHttpRequestObject();
	 var cont="sp2";
   xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'shuju.php?cont='+cont,false);
	 xmlHttp.send(null);
 }
function StatHandler()
 {
	 if(xmlHttp.readyState==4&&xmlHttp.status==200){
		document.getElementById("webpage").innerHTML=xmlHttp.responseText; 
	 }
	 
 }
 function iox(){
	 alert("x");
	 }
</script>  
   <form id="form1" name="form1" method="get" action="#">
   请选择查询商品的种类;
   <input type="button" name="NIKE" value="sp1" onclick="return NIKEx()"/>
   <input type="button" name="ADIDS" value="sp2" onclick="return ADIDASs()"/>
   <div id="webpage"></div>
   </form>