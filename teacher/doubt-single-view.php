<?php

session_start ();

if (! (isset ( $_SESSION ['login'] ))) {
	
	header ( 'location:login.php' );
}

	include '../config/control.php';

	$name=$_SESSION['name'];

	$c=new control();
	$id=$_REQUEST['id'];
	$result=$c->fetchdoubtbyid($id);
	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	$result1=$c->fetchanswers($id);
	$answercnt=mysqli_num_rows($result1);

if(isset($_POST['Submit'])) {
	$answer=$_POST['answer'];
	move_uploaded_file($_FILES["attachment"]["tmp_name"],"uploads/answers/".$_FILES["attachment"]["name"]);
		 $file=$_FILES['attachment']['name'];

		 $c=new control();
		 $res=$c->postanswer($answer,$file,$id,$name);
		 if ($res) {
				echo "<script>alert('you answered successfully');</script>";
		 }
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>TSP | Doubt <?php echo $id; ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- icons -->
	<link href="../assets/img/logo-mod.png" rel="icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

	<!-- Main CSS File -->
	<link href="../assets/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- ======= Header ======= -->
	<?php include("header.php"); ?>
	<!-- ======= End Header==== -->

	<main id="main">

		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">

				<ol>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="doubts.php?id=<?php echo $_SESSION['subject']; ?>">Doubts</a></li>          
				</ol>
				<h2>Doubt No <?php echo $row['QId']; ?></h2>

			</div>
		</section>
		<!-- ======= End Breadcrumbs==== -->

		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container ">

				<div class="row flexd">

					<div class="col-lg-10 entries ">

						<article class="entry entry-single">

							<h2 class="entry-title">
								<a href="blog-single.html"><?php echo $row['topic']; ?></a>
							</h2>

							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html"><?php echo $row['stname']; ?></a></li>
									<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php echo $row['postdate']; ?></time></a></li>
									<li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">22</a></li>
								</ul>
							</div>

							<div class="entry-content">
								<p><?php echo $row['question']; ?></p>
								<?php if ($row['Quesattach']) { ?>
								<p>Attachment : <a href="uploads/doubts/<?php echo $row['Quesattach']; ?>" target=_blank>View additional details</a> </p>
								<?php } ?>
							</div>
						</article><!-- End blog entry -->

						<div class="blog-comments">

							<h4 class="comments-count"><?php echo $answercnt; ?> Answers</h4>
							<?php foreach($result1 as $row1): ?>
							<div  class="comment answerbox  ">
								<h5><a href=""><?php echo $row1['author']; ?></a></h5>
								<time datetime="2020-01-01"><?php echo $row1['postdate']; ?></time>
								<pre><?php echo htmlentities($row1['Answer']); ?></pre>
								 <?php if ($row1['attachment']) { ?>
								<p>Attachment : <a href="../uploads/answers/<?php echo $row1['attachment']; ?>" target=_blank>View detailed answer</a> </p>
								<?php } ?>

							</div><!-- End answers -->
						<?php endforeach; ?>

							<div class="answerbox clr">
								<h4>Leave an Answer </h4>
								<form action="" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<div class="col form-group mt-2">
											<textarea rows="4" name="answer" class="form-control" placeholder="Your Reply"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col form-group ">
											<input name="attachment" type="file" >
										</div>
									</div>
									<div class="centr">
									<button type="submit" name="Submit" class="form-control form-control-lg btnsize">Post Answer</button>
									</div>
								</form>

							</div>

						</div><!-- End doubt answers -->

					</div><!-- End doubt entries list -->

			</div>
		</section><!-- End Blog Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include("footer.php"); ?>
	<!-- End Footer -->

	<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

	<!-- Vendor JS Files -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="../assets/vendor/php-email-form/validate.js"></script>
	<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="../assets/vendor/venobox/venobox.min.js"></script>
	<script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>
		<script>
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );  
	}
	</script>

</body>

</html>