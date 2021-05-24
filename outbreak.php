<?php
include "nagpur.php";
include("/inc/connection.php");   
$conn=connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

		<link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="../../../../cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" href="../../../../cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		<title>Corona Analysis and Prediction</title>
	</head>

	<body>
		<!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="index.php"><img src="assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul class="lab-ul">
							<li><a href="index.php">Home</a>					
							<li class="active"><a href="outbreak.php">Outbreak</a></li>
							<li><a href="prevention.php">Prevention</a></li>
							<li><a href="analysis.php">Analysis</a></li>
							<li><a href="prevention.php">Prediction</a></li>
							<li><a href="vaccine.php">Vaccine</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- desktop menu start here -->
		<header class="header-section transparent-header">
			<div class="header-area">
				<div class="container">
					<div class="primary-menu">
						<div class="logo">
							<a href="index.php"><img src="assets/images/logo/02.png" alt="logo"></a>
                        </div>
						<div class="main-area">
							<div class="main-menu">
								<ul class="lab-ul">
							<li><a href="index.php">Home</a>					
							<li class="active"><a href="outbreak.php">Outbreak</a></li>
							<li><a href="prevention.php">Prevention</a></li>
							<li><a href="analysis.php">Analysis</a></li>
							<li><a href="prevention.php">Prediction</a></li>
							<li><a href="vaccine.php">Vaccine</a></li>
						</ul>
							</div>
							<div class="header-btn">
								<a href="#" class="lab-btn style-2"><span>are you sick</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- desktop menu ending here -->

        <!-- Page Header Section Start Here -->
        <section class="page-header">
            <div class="container">
                <div class="page-title">
                    <h2>Mapping the Coronavirus Outbreak</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="index.php">Home</a></li>
                        <li>Coronavirus Outbreak</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
		
		<!-- corona count section start here -->
        <section class="corona-count-section pt-0 padding-tb">
            <div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top">
						<div class="row justify-content-center align-items-center">
							<div class="col-xl-3 col-md-6 col-12">
								<h5> Nagpur Total Corona Statistics :</h5>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="assets/images/corona/01.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number"><?php  echo $t_a;?></h3>
											<p>Active Cases</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="assets/images/corona/02.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number"><?php  echo $t_r;?></h3>
											<p>Recovered Cases</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="assets/images/corona/03.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number"><?php  echo $t_d;?></h3>
											<p>Deaths</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="corona-count-bottom">
					<div class="container-fluid">
						<div class="gmaps">
                            <p align="center"><img src="assets/images/nagpur.jpg" height="450" width="900" alt="map"></p>
                        </div>
					</div>
					</div>
					
					
					<?php
		
		$per_page_record = 70;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM d_count LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($conn, $query);    
		
		?>
		<div class="container-fluid">   
        <table class="table">   
          <thead align="center" bgcolor="#000099" style="color:#ffffff">   
           			 <tr>
						<th scope="col">Date</th>
						<th scope="col"> New Active</th>
						<th scope="col">New Recovered</th>
						<th scope="col">New Death</th>
						<th scope="col">Strain Name</th>
					 </tr>
          </thead>   
          <tbody>  
		  <?php
		   
		  ?> 
		  <?php     
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
            <tr align="center">     
             <td><b><?php echo $row["Date"]; ?></b></td>     
            <td><b><?php echo $row["Positive"];echo "&nbsp;&nbsp;<img src='arrow.jpg' height='14' width='8'></img>";
												  echo "&nbsp;<font color='red'></font>"; echo "<br>";
						 ?></b></td>   
            <td><b><?php echo $row["Death"]; ?></b></td>   
            <td><b><?php echo $row["Recovered"]; ?></b></td>
			<td><b><?php echo $row["Variant_name"]; ?></b></td>                                           
            </tr>     
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   
  
     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM d_count";     
        $rs_result = mysqli_query($conn, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='outbreak.php?page=".($page-1)."'>  Prev </a>";
			echo '&nbsp;&nbsp;';   
        }  
		     
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          
           echo '<b><a href="outbreak.php?page=' . $i . '">' . $i . '</a></b> '; 
		   echo '&nbsp;&nbsp;';  
        } 
		  
  		if($page>=1){   
            echo "<a href='outbreak.php?page=".($page+1)."'>  Next </a>";
			echo '&nbsp;&nbsp;';   
        }  
      ?>    
	  </div>  
 
			</div>
            </div>
        </section>
        <!-- corona count section ending here -->
		
		<!-- Footer Section Start Here -->
		<footer style="background-image: url(assets/css/bg-image/bg-3.jpg);">
			<div class="footer-bottom">
				<div class="container">
					<div class="section-wrapper">
						<p>&copy; 2021 All Rights Reserved. Designed by <a href="https://themeforest.net/user/codexcoder">Group B2.</a></p>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer Section Ending Here -->

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->

		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="../../../../cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/functions.js"></script>
		
		<script>
			$(document).ready(function() {
				$("#example").DataTable();
			});
		</script>
	</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/outbreak.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 11:11:51 GMT -->
</html>