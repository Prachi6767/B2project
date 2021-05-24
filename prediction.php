<?php
include("/inc/connection.php");   
$conn=connect();
?>
<!DOCTYPE html>
<html lang="en" class="js">


<!-- Mirrored from covstats.themenio.com/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 10:23:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Coronavirus (COVID-19) live statistics and tracking the number of confirmed cases, recovered patients, and death toll.">
    <meta name="csrf-token" content="yAr2KYadZYczbq9qXdOJ5a1iH5xF7Kc86e5R7CQb">
    <link rel="shortcut icon" href="../cor1/images/favicon.png">
    <title>Corona Analysis and Prediction.</title>
    <link rel="stylesheet" href="../cor1/assets/css/covstatsd751.css?ver=100">
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-91615293-5');
    </script>
</head>
<body class="nk-body npc-covid ui-default ui-rounder">
    <div class="nk-app-root">
        <div class="nk-main">

			<div class="nk-sidebar nk-sidebar-short nk-sidebar-fixed is-light" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="../cor1/index-2.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="../cor1/images/logo.png" srcset="https://covstats.themenio.com/demo1/images/logo2x.png 2x" alt="">
                            <img class="logo-dark logo-img" src="../cor1/images/logo-dark.png" srcset="https://covstats.themenio.com/demo1/images/logo-dark2x.png 2x" alt="">
                        </a>
                        <a href="../cor1/index-2.html" class="logo-link nk-sidebar-logo-small">
                            <img class="logo-light logo-img" src="../cor1/images/logo-small.png" srcset="https://covstats.themenio.com/demo1/images/logo-small2x.png 2x" alt="">
                            <img class="logo-dark logo-img" src="../cor1/images/logo-dark-small.png" srcset="https://covstats.themenio.com/demo1/images/logo-dark-small2x.png 2x" alt="">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-menu nk-sidebar-menu-middle">
                                
                                <ul class="nk-menu short-menu">
                                    <li class="nk-menu-item">
                                        <a href="analysis.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-notify"></em></span>
                                            <span class="nk-menu-text">Overview</span>
                                            <span class="nk-menu-tooltip" title="Overview"></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="dist.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                            <span class="nk-menu-text">District</span>
                                            <span class="nk-menu-tooltip" title="District"></span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="prediction.php" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-sun"></em></span>
                                            <span class="nk-menu-text">Prediction</span>
                                            <span class="nk-menu-tooltip" title="Prediction"></span>
                                        </a>
                                    </li>
                                   
                                    <li class="nk-menu-item">
                                        <a href="index.php" class="nk-menu-link" target="_blank">
                                            <span class="nk-menu-icon"><em class="icon ni ni-download-cloud"></em></span>
                                            <span class="nk-menu-text">Home</span>
                                            <span class="nk-menu-tooltip" title="Home"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nk-sidebar-footer d-none d-md-block">
                                <ul class="nk-menu short-menu">
                                    <li class="nk-menu-item">
                                        <a href="#" data-toggle="modal" data-target="#about-app" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-info-fill"></em></span>
                                            <span class="nk-menu-text">About Data</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="nk-wrap ">
                
                <div class="nk-header nk-header-fluid nk-header-fixed nk-header-onlymobile is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="../cor1/index-2.html" class="logo-link">
                                    <img class="logo-light logo-img" src="../cor1/images/logo.png" srcset="https://covstats.themenio.com/demo1/images/logo2x.png 2x" alt="">
                                    <img class="logo-dark logo-img" src="../cor1/images/logo-dark.png" srcset="https://covstats.themenio.com/demo1/images/logo-dark2x.png 2x" alt="">
                                </a>
                            </div>
                            <div class="nk-menu-trigger ml-auto mr-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-body">
 							
 							
<div class="nk-block-head nk-block-head-sm">
    <div class="nk-block-between flex-wrap g-1 align-start">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">COVID-19 Coronavirus Live Tracker</h5>
        </div>
        <div class="nk-block-head-content">
            <p class="note-text">Updated: May 23, 2021.</p>
        </div>
    </div>
</div>

<div class="nk-block">
    <div class="row g-gs">
        <div class="col-xl-4">
            <div class="row g-gs">
                <div class="col-lg-6 col-xl-12">
                    <div class="card card-bordered card-full">
                        <div class="card-inner">
                            <div class="nk-cov-wg1">
                                <div class="card-title">
                                    <h5 class="title">Coronavirus Predicted Cases - <small>Nagpur</small></h5>
                                </div>
                                <div class="nk-cov-data">
                                    <h6 class="overline-title">Predicted Cases from 18 may 2021 to 22 may 2021.</h6>
                                    <div class="amount">18 May 2021- 403</div>
									<div class="amount">19 May 2021-335</div>
									<div class="amount">20 May 2021-277</div>
									<div class="amount">21 May 2021-230</div>
									<div class="amount">22 May 2021-191</div>
								</div>
                              </div>   
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
                    </div>
                </div>
            </div>
        </div>
      						
							
							
							
							
							
							<div class="nk-block">
    <div class="row g-gs">
        <div class="col-xl-12">
            <div class="row g-gs">
                <div class="col-lg-6 col-xl-12">
                    <div class="card card-bordered card-full">
                        <div class="card-inner">
                            <div class="nk-cov-wg4">
                                <div class="card-title">
                                    <h5 class="title">Coronavirus Predicted Cases - <small>Nagpur</small></h5>
                                </div>
                                <div class="nk-cov-data">
                                    <h6 class="overline-title">Predicted Cases from 18 may 2021 to 22 may 2021.</h6>
									<div class="nk-cov-wg4-meta-tools">
                                		<strong class="sub-text-sm">Predicted Cases vs Original Cases</strong>
                            		</div>
									<ul class="nk-cov-wg4-meta-data">
                                <li>
                                    <div class="dot dot-lg sq bg-purple"></div>
                                    <span>Predicted</span>
                                </li>
                                <li>
                                    <div class="dot dot-lg sq bg-success"></div>
                                    <span>Original</span>
                                </li>
                            </ul>
									<div class="nk-cov-wg4-ck">
                            		<canvas class="covid-case-line-chart" id="mapWorldChart"></canvas>
                        			</div>
									
									<div class="chart-label-group ml-5">
                            <div class="chart-label">18 May, 2021</div>
                            <div class="chart-label">22 May, 2021</div>
                        </div>
								</div>
                              </div>   
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
                    </div>
                </div>
            </div>
        </div>
                
                
                <div class="nk-footer d-md-none">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap gy-1 gx-4">
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                </ul>
                            </div>
                            <div class="nk-footer-copyright"> &copy; 2021, Powered by <a href="https://softnio.com/" target="_blank">Softnio</a></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
 		</div>
	</div>
    <div class="modal fade" tabindex="-1" id="about-app">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
                <div class="modal-body">
                    <h6 class="lead-text text-primary">It changes rapidly</h6>
                    <p>This data changes rapidly, so what’s shown may be out of date. Table totals may not always represent an accurate sum. Information about reported cases is also available on the <a href="https://covid19.who.int/" target="_blank">World Health Organization</a> & <a href="https://www.worldometers.info/coronavirus/" target="_blank">WorldoMeters.info</a> site. Also historical data based on <a href="https://systems.jhu.edu/research/public-health/ncov/" target="_blank">JHU CSSE</a>.</p>
                    <h6 class="lead-text text-primary">It doesn’t include all cases</h6>
                    <p>Confirmed cases aren’t all cases. They only include people who tested positive. Testing rules and availability vary by country.</p>
                    <div class="note-text">Updated: May 22, 2021 </div>
                </div>
                <div class="modal-footer bg-light justify-content-center py-1">
                    <div class="sub-text">Powered by <a href="https://softnio.com/" target="_blank">Softnio</a></div>
                </div>
            </div>
        </div>
    </div>
        <div id="ajax-modal"></div>
	<script src="../cor1/assets/js/bundled751.js?ver=100"></script>
	<script src="../cor1/assets/js/scriptsd751.js?ver=100"></script>
    <script src="../cor1/assets/js/libs/jqvmapd751.js?ver=100"></script>
<script src="../cor1/assets/js/chart-covstatsd751.js?ver=100"></script>
<script type="text/javascript">
    var countryUri = "country-details.html";

        mapWorldChart = {
            labels : ["18 May","19 May","20 May","21 May","22 May"],
            dataUnit : 'People',
            lineTension : 0.1,
            datasets : [{
                label : "Predicted cases",
                color : "#0971fe",
                background: 'transparent',
                data: [403,335,285,230,291]

            }, {
                label : "Original cases",
                color : "#1ee0ac",
                background: 'transparent',
                data:[450,490,512,411,445,
]
            }]
        };
</script>
</body>

<!-- Mirrored from covstats.themenio.com/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 10:24:01 GMT -->
</html>