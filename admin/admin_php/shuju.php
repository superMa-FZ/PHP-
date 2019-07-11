 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php 
include("conn.php");
?>
<style type="text/css">
ul{ 
list-style:none;
	
	}
li{
	list-style:none;
	display:inline;
	margin-top:30px;
	margin-left:30px;
}
</style>
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
 
   function StatHandler()
 {
	 if(xmlHttp.readyState==4&&xmlHttp.status==200){
		document.getElementById("webpage").innerHTML=xmlHttp.responseText; 
	 }
	 
 }//分割线


 function spgl_splbgl(){
	 createXmlHttpRequestObject();
	 var cont="ckqbsp";
	 xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'_ckqbsp.php?cont='+cont,false);
	 StatHandler();
	 xmlHttp.send(null);	
 }//分割线
 
  function spgl_tjsp(){
		createXmlHttpRequestObject();
	 var cont="tjsp";
   xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'_ckqbsp.php?cont='+cont,false);
	 xmlHttp.send(null);
 }//分割线
 
 
    function spgl_tjsplb(){ 
	
		createXmlHttpRequestObject();
	 var cont="tjsplb";
   xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'_ckqbsp.php?cont='+cont,false);
	 xmlHttp.send(null);
 }//分割线
 
  function spgl_xgsp(){
	 	createXmlHttpRequestObject();
	 var cont="xgsp";
   xmlHttp.onreadystatechange=StatHandler;
	 xmlHttp.open("GET",'_ckqbsp.php?cont='+cont,false);
	 xmlHttp.send(null);
	  
  }//分割线
   

	 
	 </script>
     <div align="center">
        <ul>
             <li onclick="spgl_splbgl()">商品类别管理</li>
             <li onclick="spgl_tjsp()">添加商品</li>
             <li onclick="spgl_tjsplb()">添加商品类别</li>
             <li onclick="spgl_xgsp()">修改商品</li>
            </ul>
     </div>
     <div id="webpage" align="center"></div>
     
     

