<?php
include "total_updates.php";
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/vaccine.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 11:12:14 GMT -->
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
		
		<title>Corona Analysis and Prediction.</title>
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
							<li><a href="index.php">Home</a></li>
							<li><a href="outbreak.php">Outbreak</a></li>
							<li><a href="prevention.php">Prevention</a></li>
							<li><a href="analysis.php">Analysis</a></li>
							<li><a href="prediction.php">Prediction</a></li>
							<li class="active"><a href="vaccine.php">Vaccine</a></li>
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
										<li><a href="index.php">Home</a></li>
										<li><a href="outbreak.php">Outbreak</a></li>
										<li><a href="prevention.php">Prevention</a></li>
										<li><a href="analysis.php">Analysis</a></li>
										<li><a href="prevention.php">Prediction</a></li>
										<li class="active"><a href="vaccine.php">Vaccine</a></li>
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
                    <h2>Vaccine Info</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="index.php">Home</a></li>
                        <li>Vaccine</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
        
        <!-- Contact Section Start Here -->
		
		
		
		
		<section class="corona-count-section bg-corona padding-tb pt-0">
            <div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
						<div class="row justify-content-center align-items-center">
							<div class="col-xl-3 col-md-6 col-12">
								<h5>Today India vaccination Stats :</h5>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="assets/images/corona/01.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number"><?php echo "$cases"; ?></h3>
											<p>Total vaccinated</p>
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
											<h3 class="count-number"><?php echo "$fdose"; ?></h3>
											<p>First dose done.</p>
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
											<h3 class="count-number"><?php echo "$sdose"; ?></h3>
											<p>Second dose done.</p>
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
									<img src="assets/images/corona/vaccine.jpg" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="ccb-content">
									<h2>What Is Covid Vaccine?</h2>
									<h6>CCOVID-19 vaccines are safe, and getting vaccinated will help protect you against developing severe COVID-19 disease.</h6>
									<p>The COVID-19 vaccines are expected to provide at least some protection against new virus variants and are effective at preventing serious illness and death. </p>
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>That’s because these vaccines create a broad immune response, and any virus changes or mutations should not make vaccines completely ineffective.</li>
										<li><i class="icofont-tick-mark"></i>If any of these vaccines become less effective against one or more variants, it will be possible to change the composition of the vaccines to protect against these variants. </li>
										<li><i class="icofont-tick-mark"></i>Data continues to be collected and analysed on new variants of the COVID-19 virus. </li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
		
		<section class="corona-count-section bg-corona padding-tb pt-0">
            	<div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
						<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center     flex-row-reverse">
							<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
								<div class="ccb-thumb">
									<img src="assets/images/corona/covaxin.jpg" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="ccb-content">
									<h2>What Is Covaxin?</h2>
									<h6>Covaxin is COVID-19 vaccines  which are safe, and getting vaccinated will help protect you against developing severe COVID-19 disease.</h6>
									<p>After getting vaccinated you may feel feverish ,difficulty in breathing,bodyache,headcahe,nausea,allergic reactions,rashes etc all these depending on physical conndition  of patient. </p>
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>Covaxin gives 70 to 95% of protection</li>
										<li><i class="icofont-tick-mark"></i>It should always taken above 18 years of age.</li>
										<li><i class="icofont-tick-mark"></i> Always taken under supervision of doctors</li>
										<li><i class="icofont-tick-mark"></i>Gap of 4 weeks is ensured between two doses of vaccine.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
		
		<section class="corona-count-section bg-corona padding-tb pt-0">
            	<div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
						<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center     flex-row-reverse">
							<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
								<div class="ccb-thumb">
									<img src="assets/images/corona/v2.png" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="ccb-content">
									<h2>Regsitration through Cowin platform.</h2>
									
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>Head over to the CoWIN website, and click on to the option to register/sign in yourself.</li>
										<li><i class="icofont-tick-mark"></i>Input your mobile number and submit to get an OTP. On receiving the OTP, input it to verify.</li>
										<li><i class="icofont-tick-mark"></i>Now you can register four people for vaccination. Now, insert all the details — your name, gender, year of birth and photo ID proof, and then click on register.</li>
										<li><i class="icofont-tick-mark"></i>Upon registering you will get the option to schedule an appointment. Next to the registered person’s name click on the option of schedule.</li>
										<li><i class="icofont-tick-mark"></i>Insert your pin code and it will display all the centres where vaccination is on in the pin code area inserted by you.</li>
										<li><i class="icofont-tick-mark"></i>You can then select the centre, date and time of vaccination and click to confirm. This way you can register yourself and others for the vaccination.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
		
		<section class="corona-count-section bg-corona padding-tb pt-0">
            	<div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top wow fadeInUp" data-wow-delay="0.3s">
						<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center     flex-row-reverse">
							<div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.4s">
								<div class="ccb-thumb">
									<img src="assets/images/corona/v1.jpg" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
								<div class="ccb-content">
									<h2>Registration through Aarogya-setu Application</h2>
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>Open the Aarogya Setu app and click on the CoWIN tab.</li>
										<li><i class="icofont-tick-mark"></i>Select the vaccination registration, and input your phone number, and submit to get an OTP.</li>
										<li><i class="icofont-tick-mark"></i>Insert the OTP and verify. This will navigate you to the page where registration for vaccination can be done.</li>
										<li><i class="icofont-tick-mark"></i>Follow the same steps as mentioned above for registering on the CoWIN platform.</li>
										<li><i class="icofont-tick-mark"></i> All those getting vaccinated will need to take two vaccine shots — the second dose of Covaxin must be taken between 28 to 42 days of the first dose</li>
										<li><i class="icofont-tick-mark"></i>The second dose of Covishield vaccine must be taken between 28 to 56 days of the first dose.</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
		
		
		
        <!-- Contact Section Ending Here -->
		
		<!-- faq section start here -->
        <section class="faq-section bg-faq padding-tb">
			<div class="faq-shape">
				<img src="assets/images/faq/shape/01.png" alt="action-shape">
			</div>
            <div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Frequently Ask Questions About Vaccination.</h2>
                    <p>These are some question which are asked on vaccination ,we can get essential information out of it.</p>
                </div>
                <div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>What is vaccination?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Vaccines train your immune system to create antibodies, just as it does when it’s exposed to a disease. However, because vaccines contain only killed or weakened forms of germs like viruses or bacteria, they do not cause the disease or put you at risk of its complications.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>How does Vaccine work?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Vaccines reduce risks of getting a disease by working with your body’s natural defenses to build protection. When you get a vaccine, your immune system responds. </p>

<p>Recognizes the invading germ, such as the virus or bacteria.</p>

<p>Produces antibodies. Antibodies are proteins produced naturally by the immune system to fight disease.</p>

<p>Remembers the disease and how to fight it. If you are then exposed to the germ in the future, your immune system can quickly destroy it before you become unwell.</p>

<p>The vaccine is therefore a safe and clever way to produce an immune response in the body, without causing illness.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Is there vaccine  for covid-19?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Yes there are now several vaccines that are in use. The first mass vaccination programme started in early December 2020 and the number of vaccination doses administered is updated on a daily basis here. At least 13 different vaccines (across 4 platforms) have been administered.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Will vaccine provide long term protection?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>COVID vaccines have only been developed in the past months, it’s too early to know the duration of protection of COVID-19 vaccines. Research is ongoing to answer this question. However, it’s encouraging that available data suggest that most people who recover from COVID-19 develop an immune response that provides at least some period of protection against reinfection .</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>How quickly vaccine can  stop panndemic?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>The impact of COVID-19 vaccines on the pandemic will depend on several factors. These include the effectiveness of the vaccines; how quickly they are approved, manufactured, and delivered; the possible development of other variants and how many people get vaccinated</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Benefits of vaccination?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>The COVID-19 vaccines produce protection against the disease, as a result of developing an immune response to the SARS-Cov-2 virus.  Developing immunity through vaccination means there is a reduced risk of developing the  illness and its consequences. This immunity helps you fight the virus if exposed. Getting vaccinated may also protect people around you, because if you are protected from getting infected and from disease, you are less likely to infect someone else. </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Who should get vaccinated?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>The COVID-19 vaccines are safe for most people 18 years and older, including those with pre-existing conditions of any kind, including auto-immune disorders. These conditions include: hypertension, diabetes, asthma, pulmonary, liver and kidney disease, as well as chronic infections that are stable and controlled. </p>
<p>If supplies are limited in your area, discuss your situation with your care provider if you:</p>
<p>Have a compromised immune system</p>
<p>Are pregnant or nursing your baby</p>
<p>Have a history of severe allergies, particularly to a vaccine (or any of the ingredients in the vaccine)
<p>Are severely frail </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Are vaccine safe for children?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Vaccines are usually tested in adults first, to avoid exposing children who are still developing and growing. COVID-19 has also been a more serious and dangerous disease among older populations. Now that the vaccines have been determined to be safe for adults, they are being studied in children. Once those studies have been completed, we should know more and guidelines will be developed.</p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Can second dose of vaccine can be different than first dose?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Clinical trials in some countries are looking at whether you can have a first dose from one vaccine and a second dose from a different vaccine. There isn't enough data yet to recommend this type of combination. </p>
                                    </div>
                                </li>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6>Can Covid positive patient get vaccinated?</h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p>Even if you have already had COVID-19, you should be vaccinated when it is offered to you. The protection that someone gains from having COVID-19 will vary from person to person, and we also don’t know how long natural immunity might last. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq section ending here -->

        <!-- G-Map Section Start Here -->
        
        <!-- G-Map Section Ending Here -->
		
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
		<script src="assets/js/wow.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>

<!-- Mirrored from demos.codexcoder.com/labartisan/html/covid-19/vaccine.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 11:12:14 GMT -->
</html>