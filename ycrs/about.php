<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Devine Yoga| About Us</title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/nice-select.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header Section -->
<?php include_once('includes/header.php');?>
	<!-- Header Section end -->


	                                                                              
	<!-- Page top Section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-22 m-auto text-white">
					<!--<h4>About</h4>-->
					<p>Divine Yoga, Sadashiv Peth, Pune, India was founded in 2018 by Shri Yogendraji.Shri Yogendraji believed that yoga was not meant exclusively for bearded men living in the mountains, and he wanted to bring it to householders—the men and women who have to work, toil, commute, earn a living, raise children, and fight the battle of life everyday. He wanted to bring it to people living in the town and the city, because he believed that the householder could benefit immensely from this knowledge.Little
					surprise then that Shri Yogendra is known as the Father of Modern Yoga Renaissance.Although most people wished to learn yoga only to address their physical problems, Shri Yogendra wanted the Yoga Institute to be more than a place that would help them cope with physical ailments. He wanted it to be a `Life School’ where one learnt to live. Divine Yoga, with its simplicity, sincerity, and non-commercial outlook, reaches out to householders and attempts to help them lead happy, healthy, and balanced lives in a world that is constantly throwing up challenges.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Page top Section end -->


	<!-- What we do Section -->
	<section class="wwd-section spad set-bg" data-setbg="img/wwd-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 ml-auto">
					<?php
$sql="SELECT * from tblpage where PageType='aboutus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="wwd-text">
						
						<h3><?php  echo htmlentities($row->PageTitle);?></h3>
						<p><?php  echo ($row->PageDescription);?>.</p>
					
					
						
					</div>
					<?php $cnt=$cnt+1;}} ?>
				</div>
			</div>
		</div>
	</section>
	<!-- What we do Section end -->

	<!-- Trainer Section -->
	<section class="trainer-section overflow-hidden spad">
		<div class="container">
			<div class="section-title text-center">
				<img src="img/icons/logo-icon.png" alt="">
				<h2>Our Yoga Trainer</h2>
				<p>Practice Yoga to perfect physical beauty, take care of your soul and enjoy life more fully!</p>
			</div>
			<div class="trainer-slider owl-carousel">
				<?php
$sql="SELECT * from tblclasses order by rand() limit 2";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				<div class="ts-item">
					<div class="trainer-item">
						<div class="ti-img">
							<img src="admin/images/<?php echo $row->ProfilePics;?>" alt="">
						</div>
						<div class="ti-text">
							<h4><?php echo $row->YogaTrainer;?></h4>
							<h6>Yoga Trainer</h6>
							<p><i class="fa fa-mobile"></i>: <?php echo $row->TrainerContactnumber;?></p>
							<div class="ti-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php $cnt=$cnt+1;}} ?>
		
			</div>
		</div>
	</section>
	<!-- Trainer Section end -->

	<!-- Gallery Section -->
	<?php include_once('includes/footer.php');?>
	<!-- Footer Section end -->
	
	<div class="back-to-top"><img src="img/icons/up-arrow.png" alt=""></div>

	
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
