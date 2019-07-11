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


    function yhgl_ggglyxx(){
        createXmlHttpRequestObject();
        var cont="ggglyxx";
        xmlHttp.onreadystatechange=StatHandler;
        xmlHttp.open("GET",'_yhxxgl.php?cont='+cont,false);
        StatHandler();
        xmlHttp.send(null);
    }//分割线

    function yhgl_yhlygl(){
        createXmlHttpRequestObject();
        var cont="yhlygl";
        xmlHttp.onreadystatechange=StatHandler;
        xmlHttp.open("GET",'_yhxxgl.php?cont='+cont,false);
        xmlHttp.send(null);
    }//分割线


    function yhgl_yhxxgl(){

        createXmlHttpRequestObject();
        var cont="yhxxgl";
        xmlHttp.onreadystatechange=StatHandler;
        xmlHttp.open("GET",'_yhxxgl.php?cont='+cont,false);
        xmlHttp.send(null);
    }//分割线


</script>
<div align="center">
    <ul>
        <li onclick="yhgl_yhxxgl()">用户信息管理</i>
        <li onclick="yhgl_yhlygl()">用户留言管理</li>
        <li onclick="yhgl_ggglyxx()">更改管理员信息</li>
        </ui>
</div>
<div id="webpage" align="center"></div>
     
     

