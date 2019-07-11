<!DOCTYPE html>
<html lang="en">
<head>

 <title>Home</title>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta name="author" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" href="../css/font-awesome.min.css">
 <link rel="stylesheet" href="../css/owl.carousel.css">
 <link rel="stylesheet" href="../css/owl.theme.default.min.css">

 <!-- MAIN CSS -->
 <link rel="stylesheet" href="../css/templatemo-style.css">

</head>
<body id="top">
<!-- Courses -->
<section id="courses">
<div class="container">
   <div class="row">

        <div class="col-md-12 col-sm-12">
             <div class="section-title">
                  <h2>产品展示 <p>————product————</p><p>原瓶原装进口葡萄酒</p></h2>
             </div>
<div align="center"><a href="chanpinzhanshibaiputaojiu_zqx.php"><input class="bttn" type="button" value="白葡萄酒"></a><a href="chanpinzhanshihongputaojiu_zqx.php"><input class="bttn" type="button" value="红葡萄酒"></a></div>
             <div class="owl-carousel owl-theme owl-courses">
                 <?php
                 include_once("../admin/admin_php/conn.php");

                    $result=mysqli_query($conn,"select * from leibie");
                 while($rows=mysqli_fetch_array($result)) {

                         $result1 = mysqli_query($conn, "select * from " .$rows['lb_table']);
                         while ($rows1 = mysqli_fetch_array($result1)) {
                         ?>
                         <div class="col-md-4 col-sm-4">
                             <div class="item">
                                 <div class="courses-thumb">
                                     <div class="courses-top">
                                         <div class="courses-image">
                                             <img src="../admin/image/<?= $rows1['image']?>" class="img-responsive" alt="">
                                         </div>

                                     </div>

                                     <div class="courses-detail">
                                         <h3><a href="btpdianpu1_zqx.php?table=<?=$rows1['table_name'] ?>&id=<?=$rows1['wine_id']?>"><?=$rows1['wine_name']?></a></h3>
                                         <p>￥<?=$rows1['wine_price']?></p>
                                     </div>

                                     <div class="courses-info">
                                         <div class="courses-author">
                                             <img src="../admin/image/<?= $rows1['image']?>"  class="img-responsive" alt="">
                                             <span><?=$rows1['wine_name']?></span>
                                         </div>
                                         <div class="courses-price">
                                             <a href="#"><span>search</span></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                         <?php
                     }
                 }
                 ?>
             </div>
             <div align="right"><a href="#"><input class="bttn" type="button" value="MORE"></a></div>
        </div>
   </div>
</div>
</section>
<br><br>


<!--About US-->

<div class="con">
<div class="pic"><img src="../photo/6.jpg" width="350" height="250"></div>
<div class="cent"><h2>关于我们</h2>
<p>————About Us————</p>
<p>Destiny酒业是一家经营原装进口葡萄酒的品牌专业机构，专注于为中国消费者引进来自世界各国的一线精品葡萄酒。 一直以来，公司始终坚持对卓越品质的不懈追求，Destiny酒业有上千款精选世界各国的原装进口葡萄酒，从而保证我们的产品质量和市场竞争力。除此之外，我们还提供温控仓库、葡萄酒知识讲座、葡萄酒品尝会、葡萄酒晚宴等一系列活动来推广葡萄酒文化。</p>
<a href="gsjj_djx.php"><input class="bttn" type="button" value="MORE"></a>
</div>
</div>




 <!-- TESTIMONIAL -->
 <section id="testimonial">
	  <div class="container">
		   <div class="row">

				<div class="col-md-12 col-sm-12">
					 <div class="section-title">
						  <h2>Student Reviews <small>from around the world</small></h2>
					 </div>

					 <div class="owl-carousel owl-theme owl-client">
						  <div class="col-md-4 col-sm-4">
							   <div class="item">
									<div class="tst-image">
										 <img src="../photo/7.jpg" class="img-responsive" alt="">
									</div>
									<div class="tst-author">
										 <h4>扎哈·弗兰西斯</h4>
										 <span>来自波尔多的酿酒师</span>
									</div>
									<p>我是法国人，我的生活没有周末，因为葡萄生长，葡萄酒酿造是没有休息日的。深谙这一点，随着葡萄的节奏，我把自己，也酿成了一支酒。</p>
									<div class="tst-rating">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										
									</div>
							   </div>
						  </div>

						  <div class="col-md-4 col-sm-4">
							   <div class="item">
									<div class="tst-image">
										 <img src="../photo/8.jpg"class="img-responsive" alt="">
									</div>
									<div class="tst-author">
										 <h4>休·约翰逊</h4>
										 <span>国际品酒大师</span>
									</div>
									<p>他的独一无二的对红酒打分的标几乎成为一款新酒能否畅销的命运指挥棒。很多法国波尔多列级名庄酒都是先给他打分，再定价。</p>
									<div class="tst-rating">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
                                         <i class="fa fa-star"></i>
									</div>
							   </div>
						  </div>

						  <div class="col-md-4 col-sm-4">
							   <div class="item">
									<div class="tst-image">
										 <img src="../photo/9.jpg" class="img-responsive" alt="">
									</div>
									<div class="tst-author">
										 <h4>迈克尔·布朗</h4>
										 <span>销售总监 靠智慧吃饭的带队者</span>
									</div>
									<p>销售，绝不是降低身份去取悦客户，而是像朋友一样给予合理的建议。你刚好需要，我刚好专业！仅此而已。带着目标出去，带着结果回来。</p>
									<div class="tst-rating">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
									</div>
							   </div>
						  </div>

						  <div class="col-md-4 col-sm-4">
							   <div class="item">
									<div class="tst-image">
										 <img src="../photo/10.jpg" class="img-responsive" alt="">
									</div>
									<div class="tst-author">
										 <h4>托马斯·加西亚</h4>
										 <span>市场策划主管</span>
									</div>
									<p>事实上，任何人都是少数人，尤其是作策划的人更是当局者迷。比方说我自己的消费观念，可能100人中只有1个是同我相同的.</p>
									<div class="tst-rating">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
									</div>
							   </div>
						  </div>
                          
                          
                           <div class="col-md-4 col-sm-4">
							   <div class="item">
									<div class="tst-image">
										 <img src="../photo/11.jpg" class="img-responsive" alt="">
									</div>
									<div class="tst-author">
										 <h4>克洛伊·琼斯</h4>
										 <span>销售精英</span>
									</div>
									<p>销售80％的成交都是来自4次以上的跟踪，而不是来自技巧。她一天可以跑三个地市，当别人都回家的时候，她却许刚刚踏上返程的汽车。</p>
									<div class="tst-rating">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
									</div>
							   </div>
					 </div>
                </div>
		   </div>
	  </div>
 </section> 
 
 <!----NEWS---->
<div class="shouyedd">
     <div class="shouyenews" align="center"><h2>新闻资讯</h2><p>————NEWS————</p><p>行业最新资讯</p></div>
     <div class="center1">
       <div id="shouyed1">       
         <p>2018-06-26</p><h4><a href="yjzz_fg_djx.php">法国萨吕斯酒堡葡萄酒</a></h4><p>位置萨吕斯酒堡（Chateaud'YquemofLuvsa-Lvsi,也被译为伊甘酒庄</p>
      
         <p>2018-06-26</p><h4><a href="yjzz_pt_djx.php">葡萄酒与春天的约会！</a></h4><p>春天来临，草长莺飞、百花盛开，正是约上三好五友走出室内，走进大自然的大好时光。郊游踏青、野餐野炊不失</p>
       </div>
       <div id="shouyed2">
         <p>2018-06-26</p>
         <h4><a href="#">韩媒：中国葡萄酒产量世界第六 年轻人更爱进口葡萄酒</a></h4>
         <p>韩媒称，谈到中国的酒类，一般会想到以茅台为代表的白酒，韩国最近流行的羊肉串或许还会让人联想到中国的青</p>
         <p>2018-06-26</p>
         <h4><a href="#">法国波尔多葡萄酒</a></h4>
         <p>法国波尔多位于法国西南部，邻近西班牙，位于加龙河下游，据大西洋98公里。法国波尔多是世界葡萄酒</p>
       </div>
     </div>
</div>

<!-- SCRIPTS -->
 <script src="../js/jquery.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/owl.carousel.min.js"></script>

 <script src="../js/custom.js"></script>

</body>
</html>