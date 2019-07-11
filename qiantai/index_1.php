<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title></title>
<script src="../js/jquery.js" type="text/javascript"></script>
<script src="../js/jquery.carouFredSel.js" type="text/javascript"></script>
<style type="text/css">
    html, body {
        height: 100%;
        padding: 0;
        margin: 0;
    }
    body {
        background-color: #f3f3f3;
        min-height: 350px;
    }
    body * {
        font-family: Arial, Geneva, SunSans-Regular, sans-serif;
        font-size: 14px;
        color: #333;
        line-height: 22px;
    }

    #wrapper {
        width: 735px;
        height: 220px;
        margin: -110px 0 0 -367px;
        position: absolute;
        left: 50%;
        top: 40%;
    }

    #carousel {
        width: 735px;
        position:vrelative;
    }
    #carousel ul {
        list-style: none;
        display: block;
        margin: 0;
        padding: 0;
    }
    #carousel li {
        background: transparent url(../photo/carousel_polaroid.png) no-repeat 0 0;
        font-size: 40px;
        color: #999;
        text-align: center;
        display: block;
        width: 232px;
        height: 178px;
        padding: 0;
        margin: 6px;
        float: left;
        position: relative;
    }

    #carousel li img {
        width: 201px;
        height: 127px;
        margin-top: 14px;
    }
    
    #carousel li span {
        background: transparent url(../photo/carousel_shine.png) no-repeat 0 0;
        text-indent: -999px;
        display: block;
        overflow: hidden;
        width: 201px;
        height: 127px;
        position: absolute;
        z-index: 2;
        top: 14px;
        left: 16px;
    }			

    .clearfix {
        float: none;
        clear: both;
    }
    #carousel .prev, #carousel .next {
        background: transparent url(../photo/carousel_control.png) no-repeat 0 0;
        text-indent: -999px;
        display: block;
        overflow: hidden;
        width: 15px;
        height: 21px;
        margin-left: 10px;
        position: absolute;
        top: 70px;				
    }
    #carousel .prev {
        background-position: 0 0;
        left: -30px;
    }
    #carousel .prev:hover {
        left: -31px;
    }			
    #carousel .next {
        background-position: -18px 0;
        right: -20px;
    }
    #carousel .next:hover {
        right: -21px;
    }				
    #carousel .pager {
        text-align: center;
        margin: 0 auto;
    }
    #carousel .pager a {
        background: transparent url(../photo/carousel_control.png) no-repeat -2px -32px;
        text-decoration: none;
        text-indent: -999px;
        display: inline-block;
        overflow: hidden;
        width: 8px;
        height: 8px;
        margin: 0 5px 0 0;
    }
    #carousel .pager a.selected {
        background: transparent url(../photo/carousel_control.png) no-repeat -12px -32px;
        text-decoration: underline;				
    }
    
    #source {
        text-align: center;
        width: 100%;
        position: absolute;
        bottom: 10px;
        left: 0;
    }
    #source, #source a {
        font-size: 12px;
        color: #999;
    }
    
    #donate-spacer {
        height: 100%;
    }
    #donate {
        border-top: 1px solid #999;
        width: 750px;
        padding: 50px 75px;
        margin: 0 auto;
        overflow: hidden;
    }
    #donate p, #donate form {
        margin: 0;
        float: left;
    }
    #donate p {
        width: 650px;
    }
    #donate form {
        width: 100px;
    }
</style>
</head>
<body>
  <script type="text/javascript">
      $(function() {
          $('#carousel ul').carouFredSel({
              prev: '#prev',
              next: '#next',
              pagination: "#pager",
              scroll: 1000
          });
      });
  </script>
  <div style="text-align:center">
       <h1>红酒学院</h1>
       <p>--school--</p>
       <p style="color:#666">最全面的红酒知识</p> 
  </div>
  <div id="wrapper">
      <div id="carousel">
          <ul>
              <li><img src="../photo/one3.jpg" alt="五大酒庄"/></li>
              <li><img src="../photo/one4.jpg" alt="等级制度"/></li>
              <li><img src="../photo/one5.jpg" alt="红酒分类"/></li>
              <li><img src="../photo/one6.jpg" alt="美食搭配"/></li>
              <li><img src="../photo/one7.jpg" alt="储藏方式"/></li>					
          </ul>
          <div class="clearfix"></div>
          <a id="prev" class="prev" href="#">&lt;</a>
          <a id="next" class="next" href="#">&gt;</a>
          <div id="pager" class="pager"></div>
      </div>
  </div>
</body>
</html>