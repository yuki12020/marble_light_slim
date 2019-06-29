<!DOCTYPE html>
<html class="no-js">
	<head>
	<?php  include dirname(__FILE__) ."./../include/head.php"; ?>
	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>		
		<!--style.cssのfh5co-asideにbackground:色;記述-->
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">
			<?php  include dirname(__FILE__) ."./../include/home.php"; ?>
			<?php  include dirname(__FILE__) ."./../include/sidebar.php"; ?>						
		</aside>		
			<?php 
			//classの呼び出し
			include_once "./../class/indexClass.php";
			?>
		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<?php //echo "記述エリア---";?>
				<?php
				$obj=new index();
				$select_querry = $obj->perl();
				foreach($select_querry as $key =>$value){
					$smt.="<div class="."col-md-3 col-sm-6 col-padding animate-box"." data-animate-effect="."fadeInLeft".">";
						$smt.="<div class="."blog-entry".">";
							$smt.= "id:".$value["id"]."<br>";
							$smt.= "".$value["keyword"];
							$smt.="<img src="."images"."/"."notimage.jpg"." class="."img-responsive"." alt="."Free HTML5 Bootstrap Template by FreeHTML5.co".">";							
							$smt.="<div class="."fh5co-text".">";
								$smt.="<a href="."./details_top.php?id=".
								htmlspecialchars($value["id"],ENT_QUOTES,'UTF-8')." class="."lead".">"
								//."<p style="."color:blue".";".">".$value["keyword"]."</p>".
								."<i class="."btn btn-primary btn-learn".">"."詳細"."</i>".
								"</a>";
								$smt.= "<p>件数:".$value["kensu"]."</p>";						
							$smt.="</div>";							
						$smt.="</div>";
					$smt.="</div>";					
				}
				echo $smt;
				?>
			</div>
		</div>
		
	</div>
	<?php  include dirname(__FILE__) ."./../include/jquery.php"; ?>
	</body>
</html>