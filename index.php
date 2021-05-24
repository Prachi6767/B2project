<?php
 include "total_updates.php";
?>
<html lang="en">
	
<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 11:05:02 GMT -->
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/x-icon/01.png">

		<link rel="stylesheet" href="assets/css/animate.css">
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
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="outbreak.php">Outbreak</a></li>
							<li><a href="prevention.php">Prevention</a></li>
							<li><a href="analysis.php">Analysis</a></li>
							<li><a href="prediction.php">Prediction</a></li>
							<li><a href="vaccine.php">Vaccine</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->

		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-area">
				<div class="container">
					<div class="primary-menu">
						<div class="logo">
							<a href="index.php"><img src="assets/images/logo/01.png" alt="logo"></a>
						</div>
						<div class="main-area">
							<div class="main-menu">
								<ul class="lab-ul">
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="outbreak.php">Outbreak</a></li>
									<li><a href="prevention.php">Prevention</a></li>
									<li><a href="analysis.php">Analysis</a></li>
									<li><a href="prediction.php">Prediction</a></li>
									<li><a href="vaccine.php">Vaccine</a></li>
								</ul>
							</div>
							<div class="header-btn">
								<a href="#" class="lab-btn"><span>are you sick</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- desktop menu ending here -->

		<!-- Banner Section start here -->
		<section class="banner-section pb-0">
			<div class="banner-area">
				<div class="container">
					<div class="row no-gutters align-items-center justify-content-center">
						<div class="col-12">
							<div class="content-part text-center">
								<div class="section-header">
                                    <h2>INDIA COVID-19 Tracker</h2>
                                    <h3>Total Confirmed Corona Cases</h3>
									<h2 class="count-people"><?php echo "$total"; ?></h2>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="section-wrapper">
								<div class="banner-thumb">
									<img src="assets/images/banner/01.png" alt="lab-banner">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <!-- Banner Section ending here -->

        <!-- corona count section start here -->
        <section class="corona-count-section bg-corona padding-tb pt-0">
            <div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
						<div class="row justify-content-center align-items-center">
							<div class="col-xl-3 col-md-6 col-12">
								<h5>Today India Covid Stats :</h5>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="assets/images/corona/01.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number"><?php echo "$active"; ?></h3>
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
											<h3 class="count-number"><?php echo "$recover"; ?></h3>
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
											<h3 class="count-number"><?php echo "$death"; ?></h3>
											<p>Deaths</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center     flex-row-reverse">
							<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
								<div class="ccb-thumb">
									<a href="https://www.youtube.com/embed/EDrgwptq6ug" data-rel="lightcase" class="ccb-video"><i class="icofont-ui-play"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
									<img src="assets/images/corona/01.jpg" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="ccb-content">
									<h2>What Is Coronavirus?</h2>
									<h6>Coronavirus COVID-19 Global Cases map developed by the Johns Hopkins Center for Systems Science and Engineering.</h6>
									<p>Coronaviruses are type of virus. There are many different kinds, & some cause disease newly identified type has caused recent outbreak of respiratory ilnessnow called COVID-19 that started in China.</p>
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2020.</li>
										<li><i class="icofont-tick-mark"></i>COVID-19 symptoms include cough, fever and shortness of breath. COVID-19 can be severe, and some cases have caused death.</li>
										<li><i class="icofont-tick-mark"></i>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- corona count section ending here -->
        
        <!-- Service Section Start Here -->
		<section class="service-section bg-service padding-tb">
            <div class="service-shape">
                <div class="shape shape-1">
                    <img src="assets/images/service/shape/01.png" alt="service-shape">
                </div>
                <div class="shape shape-2">
                    <img src="assets/images/service/shape/01.png" alt="service-shape">
                </div>
            </div>
            <div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Corona Virus Symptoms</h2>
                    <p> COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/01.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Coughing And Sneezing</h4>
                                        <p>Symptoms in which both allergies and COVID-19 can have in common include Coughing And Sneezing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/02.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Hot Fever</h4>
                                        <p>Fever is one of the main symptoms of sickness from coronavirus infection, along with cough and shortness of breath. These symptoms can appear two to 14 days after exposure to coronavirus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/03.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Strong Headache</h4>
                                        <p>Headache can also be a symptom of COVID-19 in people with migraine. In these cases, headaches have been reported as occurring prior to the onset of more typical COVID-19 symptoms, like fever and cough..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/04.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Shortness Of Breath</h4>
                                        <p>Shortness of breath can make it hard to breathe. It can leave you gasping for air.Your chest may feel too tight to inhale or exhale fully.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/05.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Confusion</h4>
                                        <p>Sometimes we get confuse and afraid of being infected and hence we delay to take medication which may spread infection.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.8s">
                            <div class="service-item text-center">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="assets/images/service/06.jpg" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4>Sore Throat</h4>
                                        <p>A sore throat feels dry, itchy, and scratchy, makes swallowing painful, and can even make eating solid food difficult. A sore throat can be caused by inflamed tissues brought on by a cold virus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<!-- Service Section Ending Here -->
		
		<!-- Team Member Section Start here -->
        <div class="team-section bg-team padding-tb">
            <div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h2>Meet Our Best Doctors</h2>
					<p> Meet or contact our team of doctors they may help you taking treatments from home and help you with everything you may need during treatments.</p>
				</div>
				<div class="team-area">
					<div class="row justify-content-center align-items-center">
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/01.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Dorothy M. Nickell</h5>
										<span class="member-dagi">Throat Specialist</span>
										<p class="member-details"> She is an Otolaryngologist trained in the medical and surgical care of head and neck disorders.</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>d.m.nickell@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/02.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Billie R. Courtney</h5>
										<span class="member-dagi">Cardiologist</span>
										<p class="member-details">He is a cardiologist,will check your vital signs and perform a physical exam. They may also order a number of tests and diagnostic procedures, depending on your symptoms, risk factors and health history.</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>b.r.courtney@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="team-item">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/03.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Courtney A. Smith</h5>
										<span class="member-dagi">Rehabilitation Therapy</span>
										<p class="member-details"> She is an  experienced therapist.Rehabilitation is care that can help you get back, keep, or improve abilities that you need for daily life.</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>c.a.smith@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- Team Member Section Ending here -->
		
		<!-- safe actions section start here -->
		<section class="safe-actions padding-tb bg-action">
			<div class="action-shape">
				<img src="assets/images/safe/shape/01.png" alt="action-shape">
			</div>
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
						<div class="sa-thumb-part">
							<div class="safe-thumb">
								<img src="assets/images/safe/01.jpg" alt="safe-actions">
								<div class="shape-icon">
									<div class="sa-icon sa-green saicon-1">
										<img src="assets/images/safe/shape/green/01.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-2">
										<img src="assets/images/safe/shape/green/02.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-3">
										<img src="assets/images/safe/shape/green/03.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-4">
										<img src="assets/images/safe/shape/green/04.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-5">
										<img src="assets/images/safe/shape/green/05.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-6">
										<img src="assets/images/safe/shape/red/01.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-7">
										<img src="assets/images/safe/shape/red/02.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-8">
										<img src="assets/images/safe/shape/red/03.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-9">
										<img src="assets/images/safe/shape/red/04.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-10">
										<img src="assets/images/safe/shape/red/05.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
						<div class="sa-content-part">
							<h2>How to stay Safe Important Precautions</h2>
							<p>There are lots of potential hazards in our homes but if you’re aware of the danger areas and unsafe habits, you’re more likely to be able to keep yourself from harm. There are steps you can take to protect yourself. You can also get help to stay safe and well at home.</p>
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="sa-title">
										<h6><i class="icofont-checked"></i>Things You Should Do</h6>
									</div>
									<ul class="lab-ul">
										<li><i class="icofont-check-circled"></i>Stay at Home</li>
										<li><i class="icofont-check-circled"></i>Wear Mask</li>
										<li><i class="icofont-check-circled"></i>Wash Your Hands</li>
										<li><i class="icofont-check-circled"></i>Well Done Cooking</li>
										<li><i class="icofont-check-circled"></i>Seek for a Doctor</li>
									</ul>
								</div>
								<div class="col-lg-6 col-12">
									<div class="sa-title">
										<h6><i class="icofont-not-allowed"></i>Things You Should Avoid</h6>
									</div>
									<ul class="lab-ul">
										<li><i class="icofont-close-circled"></i>Avoid travelling.</li>
										<li><i class="icofont-close-circled"></i>Dont Handshake.</li>
										<li><i class="icofont-close-circled"></i>Dont touch your face.</li>
										<li><i class="icofont-close-circled"></i>Avoid crowded places.</li>
										<li><i class="icofont-close-circled"></i>Avoid contact with animals.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- safe actions section ending here -->

		<!-- faq section start here -->
        
        <!-- faq section ending here -->

		<!-- Blog Section Start Here -->
		
		<!-- Blog Section Ending Here -->
		
		<!-- Sponsor Section Start Here -->
		
		<!-- Sponsor Section Ending Here -->

		<!-- Footer Section Start Here -->
		<footer style="background-image: url(assets/css/bg-image/footer-bg.jpg);">
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
		<script src="assets/js/wow.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 11:06:08 GMT -->
</html>