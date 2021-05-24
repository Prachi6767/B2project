<?php
include "total_updates.php";
include "nagpur.php";
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
                                    <h5 class="title">Coronavirus Cases - <small>Nagpur</small></h5>
                                </div>
                                <div class="nk-cov-data">
                                    <h6 class="overline-title">Total Confirmed Cases</h6>
                                    <div class="amount"><?php echo $t_cm; ?></div>
                                </div>
                                <div class="nk-cov-wg1-progress">
                                    <div class="progress progress-reverse progress-md progress-pill progress-bordered">
                                        <div class="progress-bar bg-danger" data-progress="1.39" data-toggle="tooltip" title="Death: 1.39%"></div>
                                        <div class="progress-bar bg-success" data-progress="94.8" data-toggle="tooltip" title="Recovered: 94.8%"></div>
                                        <div class="progress-bar bg-purple" data-progress="3.80" data-toggle="tooltip" title="Active Cases: 3.80%"></div>
                                    </div>
                                </div>
                                <ul class="nk-cov-wg1-data">
                                    <li>
                                        <div class="title">
                                            <div class="dot dot-lg sq bg-purple"></div>
                                            <span>Active Cases</span>
                                        </div>
                                        <div class="count"><?php  echo $t_a; ?></div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <div class="dot dot-lg sq bg-success"></div>
                                            <span>Recovered</span>
                                        </div>
                                        <div class="count"><?php  echo $t_r; ?></div>
                                    </li>
                                    <li>
                                        <div class="title">
                                            <div class="dot dot-lg sq bg-danger"></div>
                                            <span>Deaths</span>
                                        </div>
                                        <div class="count"><?php  echo $t_d;?></div>
                                    </li>
                                </ul>
                                <div class="nk-cov-wg-note">Ratio of <span class="text-primary">Recovery (94.8%)</span> &amp; <span class="text-primary">Deaths (1.39%)</span>.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-12">
                    <div class="card card-bordered card-full">
                        <div class="card-inner">
                            <div class="nk-cov-wg2">
                                <div class="card-title">
                                    <h5 class="title">Coronavirus Cases - <small>Maharashtra</small></h5>
                                </div>
                                <div class="nk-cov-wg2-block">
                                    <div class="nk-cov-wg2-group-top">
                                        <div class="nk-cov-group">
                                            <div class="nk-cov-data">
                                                <h6 class="overline-title">Confirmed</h6>
                                                <div class="amount amount-sm"><?php  echo $mc;?><small></small></div>
                                            </div>
											<div class="nk-cov-data">
                                                <h6 class="overline-title">Active</h6>
                                                <div class="amount amount-sm text-primary"><?php  echo $ma;?><small></small></div>
                                            </div>
                                            <div class="nk-cov-data">
                                                <h6 class="overline-title">Deaths</h6>
                                                <div class="amount amount-sm text-danger"><?php  echo $md;?> <small></small></div>
                                            </div>
                                            <div class="nk-cov-data">
                                                <h6 class="overline-title">Recovered</h6>
                                                <div class="amount amount-sm text-success"><?php  echo $mr;?></div>
                                            </div>
                                        </div>
                                        <div class="nk-cov-wg-note">Ratio of <span class="text-primary">Recovery (92.03%)</span> &amp; <span class="text-primary">Deaths (1.57%)</span>.</div>
                                    </div>
                                    <div class="nk-cov-wg2-group-bottom nk-cov-wg2-group">
                                        <div class="nk-cov-data">
                                            <h6 class="sub-text">Last <br class="d-xxl-none">Updated:</h6>
                                            <div class="amount amount-xs"><?php  echo $time;?></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card card-bordered card-full">
                <div class="nk-cov-wg4">
                    <div class="nk-cov-wg4-aside">
                        <div class="nk-cov-wg4-aside-head">
                            <h6 class="nk-cov-wg4-aside-title">Cases by Dsitrict:</h6>
                            <div class="nk-cov-wg4-aside-action mr-n2">&nbsp;</div>
                        </div>
                        <div class="nk-cov-wg4-aside-body" data-simplebar>
                            <ul class="nk-cov-wg4-list">
                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="global">
                                        <span class="title">Maharashtra</span>
                                        <span class="count"><?php  echo $t_cm; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="us">
                                        <span class="title">Ahemadnagar</span>
                                        <span class="count"><?php  echo $ah; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="in">
                                        <span class="title">Amravati</span>
                                        <span class="count"><?php  echo $am; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="br">
                                        <span class="title">Aurangabad</span>
                                        <span class="count"><?php  echo $au; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="fr">
                                        <span class="title">Beed</span>
                                        <span class="count"><?php  echo $bd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="tr">
                                        <span class="title">Bhandara</span>
                                        <span class="count"><?php  echo $bh; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ru">
                                        <span class="title">Buldhana</span>
                                        <span class="count"><?php  echo $bd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="gb">
                                        <span class="title">chandrapur</span>
                                        <span class="count"><?php  echo $cd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="it">
                                        <span class="title">Dhule</span>
                                        <span class="count"><?php  echo $dh; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="de">
                                        <span class="title">Gadchiroli</span>
                                        <span class="count"><?php  echo $gd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="es">
                                        <span class="title">Gondia</span>
                                        <span class="count"><?php  echo $gn; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ar">
                                        <span class="title">Hingoli</span>
                                        <span class="count"><?php  echo $hg; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="co">
                                        <span class="title">Jalgaon</span>
                                        <span class="count"><?php  echo $jg; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="pl">
                                        <span class="title">Jalna</span>
                                        <span class="count"><?php  echo $jl; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ir">
                                        <span class="title">Kolhapur</span>
                                        <span class="count"><?php  echo $kl; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="mx">
                                        <span class="title">Latur</span>
                                        <span class="count"><?php  echo $lt; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ua">
                                        <span class="title">Mumbai</span>
                                        <span class="count"><?php  echo $mum; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="pe">
                                        <span class="title">Nagpur</span>
                                        <span class="count"><?php  echo $ng; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="id">
                                        <span class="title">Nanded</span>
                                        <span class="count"><?php  echo $nd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="cz">
                                        <span class="title">Nandurbar</span>
                                        <span class="count"><?php  echo $ndb; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="za">
                                        <span class="title">Nashik</span>
                                        <span class="count"><?php  echo $ns; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="nl">
                                        <span class="title">Osmanabad</span>
                                        <span class="count"><?php  echo $os; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ca">
                                        <span class="title">Palghar</span>
                                        <span class="count"><?php  echo $pg; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="cl">
                                        <span class="title">Prabhani</span>
                                        <span class="count"><?php  echo $pb; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ph">
                                        <span class="title">Pune</span>
                                        <span class="count"><?php  echo $pn; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="iq">
                                        <span class="title">Raigad</span>
                                        <span class="count"><?php  echo $rg; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="ro">
                                        <span class="title">Ratnagiri</span>
                                        <span class="count"><?php  echo $rt; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="se">
                                        <span class="title">Sangli</span>
                                        <span class="count"><?php  echo $sg; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="be">
                                        <span class="title">Satara</span>
                                        <span class="count"><?php  echo $st; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="pk">
                                        <span class="title">Sindhudurg</span>
                                        <span class="count"><?php  echo $sd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="pt">
                                        <span class="title">Solapur</span>
                                        <span class="count"><?php  echo $sl; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="il">
                                        <span class="title">Thane</span>
                                        <span class="count"><?php  echo $th; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="hu">
                                        <span class="title">Wardha</span>
                                        <span class="count"><?php  echo $wd; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="bd">
                                        <span class="title">Washim</span>
                                        <span class="count"><?php  echo $ws; ?></span>
                                    </a>
                                </li>
                                                                                        									<li>
                                    <a class="nk-cov-wg4-list-item" data-id="jo">
                                        <span class="title">Yavatmal</span>
                                        <span class="count"><?php  echo $yt; ?></span>
                                    </a>
                                </li>
                                                                                        									
							</ul>
						</div>
                                                                                        									
                        <div class="nk-cov-wg4-aside-foot text-center">
                        </div>
                    </div>
                    <div class="nk-cov-wg4-content">
                        <div class="nk-cov-wg4-map">
                            
							<div class="container-fluid"> <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1nPzrmcGja86cbZpYrGGA82Rr4w9GTSv8" width="630" height="350"></iframe></div>
                        </div>
                        <div class="nk-cov-wg4-meta">
                            <div class="nk-cov-wg4-meta-tools">
                                <strong class="sub-text-sm">Nagpur  Daily Case History</strong>
                            </div>
                            <ul class="nk-cov-wg4-meta-data">
                                <li>
                                    <div class="dot dot-lg sq bg-purple"></div>
                                    <span>Confirmed</span>
                                </li>
                                <li>
                                    <div class="dot dot-lg sq bg-success"></div>
                                    <span>Recovered</span>
                                </li>
                                <li>
                                    <div class="dot dot-lg sq bg-danger"></div>
                                    <span>Deaths</span>
                                </li>
                            </ul>
                        </div>
                        <div class="nk-cov-wg4-ck">
                            <canvas class="covid-case-line-chart" id="mapWorldChart"></canvas>
                        </div>
                        <div class="chart-label-group ml-5">
                            <div class="chart-label">1 Jan, 2021</div>
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


                        </div>
                    </div>
                </div>
                
                
                <div class="nk-footer d-md-none">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap gy-1 gx-4">
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#about-app">About Data</a></li>
                                </ul>
                            </div>
                            <div class="nk-footer-copyright"> &copy; 2021, Designed by <a href="" target="_blank">Group B2.</a></a>
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
                    <div class="note-text">Updated: May 22, 2021, 10:07 UTC</div>
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
	
    var worldMap = { map: 'world_en', data : {"us": "33862398","in": "26289290","br": "15976156","fr": "5581351","tr": "5169951","ru": "4992554","gb": "4457923","it": "4183476","de": "3646600","es": "3636453","ar": "3482512","co": "3192050","pl": "2864546","ir": "2815882","mx": "2392744","ua": "2179988","pe": "1915566","id": "1769940","cz": "1657558","za": "1628335","nl": "1619648","ca": "1352121","cl": "1315913","ph": "1178217","iq": "1160494","ro": "1074781","se": "1058341","be": "1044612","pk": "897468","pt": "844288","il": "839290","hu": "801672","bd": "786698","jo": "729185","jp": "709527","rs": "709269","ch": "687353","at": "640876","ae": "552920","lb": "537887","ma": "516449","my": "505115","np": "497052","sa": "438705","ec": "416621","bg": "416417","sk": "388719","gr": "387426","by": "384773","pa": "373308","kz": "371015","hr": "353735","bo": "343065","ge": "336840","tn": "332833","az": "331883","py": "327229","ps": "304968","cr": "299219","kw": "297206","do": "281630","dk": "271908","lt": "270376","et": "268520","uy": "258540","ie": "257886","md": "254499","eg": "251539","si": "251531","gt": "246156","hn": "231560","am": "221880","ve": "221042","qa": "214830","bh": "212151","om": "208607","ba": "203150","ly": "182899","ke": "167535","ng": "165944","lk": "158333","mk": "154982","mm": "143211","kr": "135344","al": "132153","lv": "130712","cu": "130543","ee": "128489","dz": "126434","th": "126118","no": "121511","kg": "102186","me": "99153","uz": "98164","gh": "93521","zm": "92920","fi": "91405","cn": "90954","cm": "77733","sv": "72220","cy": "71745","mz": "70551","lu": "69545","af": "65728","sg": "61799","na": "52433","mv": "52405","mn": "51931","bw": "51620","jm": "47776","ci": "46874","ug": "43370","sn": "41023","mg": "40692","zw": "38664","sd": "35071","mw": "34261","ao": "31909","cd": "30825","mt": "30497","au": "30003","cv": "29033","rw": "26601","kh": "24645","ga": "24107","sy": "23996","re": "23566","gn": "22963","gf": "22780","yt": "20176","mr": "19049","tt": "18935","pf": "18844","sz": "18546","gp": "16530","gy": "15743","pg": "14910","so": "14594","ml": "14236","ht": "13624","ad": "13569","bf": "13410","tg": "13352","tj": "13308","bz": "12764","sr": "12742","cw": "12268","mq": "11866","hk": "11831","dj": "11490","cg": "11476","bs": "11396","aw": "10902","ls": "10806","ss": "10652","sc": "9764","gq": "8436","bj": "8025","ni": "7193","cf": "7010","ye": "6632","is": "6556","gm": "5968","ne": "5364","tl": "5287","sm": "5087","vn": "5013","lc": "4935","td": "4919","bi": "4451","gi": "4286","sl": "4115","je": "4059","bb": "3985","er": "3921","km": "3868","gw": "3749","tw": "3139","li": "2997","nz": "2662","mc": "2500","bm": "2488","tc": "2408","sx": "2356","st": "2335","lr": "2142","vc": "1962","mf": "1915","la": "1763","bq": "1607","im": "1591","bt": "1374","mu": "1293","ag": "1255","bl": "1005","xd": "712","fo": "671","ky": "574","tz": "509","vg": "248","bn": "235","fj": "198","dm": "184","gd": "161","nc": "125","ai": "109","fk": "63","mo": "50","kn": "46","gl": "34","va": "27","pm": "25","ms": "20","eh": "10","xz": "9"} },
       
	    worldTimeline = {
            labels : ["21 Jan","22 Jan","23 Jan","24 Jan","25 Jan","26 Jan","27 Jan","28 Jan","29 Jan","30 Jan","31 Jan","01 Feb","02 Feb","03 Feb","04 Feb","05 Feb","06 Feb","07 Feb","08 Feb","09 Feb","10 Feb","11 Feb","12 Feb","13 Feb","14 Feb","15 Feb","16 Feb","17 Feb","18 Feb","19 Feb","20 Feb","21 Feb","22 Feb","23 Feb","24 Feb","25 Feb","26 Feb","27 Feb","28 Feb","01 Mar","02 Mar","03 Mar","04 Mar","05 Mar","06 Mar","07 Mar","08 Mar","09 Mar","10 Mar","11 Mar","12 Mar","13 Mar","14 Mar","15 Mar","16 Mar","17 Mar","18 Mar","19 Mar","20 Mar","21 Mar"],
            dataUnit : 'People',
            lineTension : 0.1,
            datasets : [{
                label : "Confirmed",
                color : "#0971fe",
                background: 'transparent',
                data: [97197850,97854982,98421398,98866458,99373260,99922617,100436168,101101434,101711839,102225973,102606989,103052210,103508537,104028656,104493995,105027577,105399135,105796388,106110483,106537069,106970872,107410958,107838627,108210938,108503702,108785379,109134659,109528680,109930946,110369474,110739134,111050462,111337904,111724078,112166373,112611497,113052424,113440135,113714500,114019000,114325601,114762706,115214723,115658920,116066467,116432250,116809168,117210597,117674712,118150206,118635862,119088633,119446905,119785747,120262197,120798780,121349993,121872460,122369240,122760858]
            }]
        }, 
        worldDaily = {
            labels : ["21 Jan","22 Jan","23 Jan","24 Jan","25 Jan","26 Jan","27 Jan","28 Jan","29 Jan","30 Jan","31 Jan","01 Feb","02 Feb","03 Feb","04 Feb","05 Feb","06 Feb","07 Feb","08 Feb","09 Feb","10 Feb","11 Feb","12 Feb","13 Feb","14 Feb","15 Feb","16 Feb","17 Feb","18 Feb","19 Feb","20 Feb","21 Feb","22 Feb","23 Feb","24 Feb","25 Feb","26 Feb","27 Feb","28 Feb","01 Mar","02 Mar","03 Mar","04 Mar","05 Mar","06 Mar","07 Mar","08 Mar","09 Mar","10 Mar","11 Mar","12 Mar","13 Mar","14 Mar","15 Mar","16 Mar","17 Mar","18 Mar","19 Mar","20 Mar","21 Mar"],
            dataUnit : 'People',
            lineTension : 0.1,
            datasets : [{
                label : "Confirmed",
                color : "#0971fe",
                background: 'transparent',
                data: [654682,657132,566416,445060,506802,549357,513551,665266,610405,514134,381016,445221,456327,520119,465339,533582,371558,397253,314095,426586,433803,440086,427669,372311,292764,281677,349280,394021,402266,438528,369660,311328,287442,386174,442295,445124,440927,387711,274365,304500,306601,437105,452017,444197,407547,365783,376918,401429,464115,475494,485656,452771,358272,338842,476450,536583,551213,522467,496780,391618]
            }]
        },
        worldSpread = {
            labels : ["21 Jan","22 Jan","23 Jan","24 Jan","25 Jan","26 Jan","27 Jan","28 Jan","29 Jan","30 Jan","31 Jan","01 Feb","02 Feb","03 Feb","04 Feb","05 Feb","06 Feb","07 Feb","08 Feb","09 Feb","10 Feb","11 Feb","12 Feb","13 Feb","14 Feb","15 Feb","16 Feb","17 Feb","18 Feb","19 Feb","20 Feb","21 Feb","22 Feb","23 Feb","24 Feb","25 Feb","26 Feb","27 Feb","28 Feb","01 Mar","02 Mar","03 Mar","04 Mar","05 Mar","06 Mar","07 Mar","08 Mar","09 Mar","10 Mar","11 Mar","12 Mar","13 Mar","14 Mar","15 Mar","16 Mar","17 Mar","18 Mar","19 Mar","20 Mar","21 Mar"],
            dataUnit : 'People',
            lineTension : 0.1,
            datasets : [{
                label : "Confirmed",
                color : "#0971fe",
                background: 'transparent',
                data: [97197850,97854982,98421398,98866458,99373260,99922617,100436168,101101434,101711839,102225973,102606989,103052210,103508537,104028656,104493995,105027577,105399135,105796388,106110483,106537069,106970872,107410958,107838627,108210938,108503702,108785379,109134659,109528680,109930946,110369474,110739134,111050462,111337904,111724078,112166373,112611497,113052424,113440135,113714500,114019000,114325601,114762706,115214723,115658920,116066467,116432250,116809168,117210597,117674712,118150206,118635862,119088633,119446905,119785747,120262197,120798780,121349993,121872460,122369240,122760858]
            }, {
                label : "Deaths",
                color : "#f6525e",
                background: 'transparent',
                data: [2085529,2101419,2114669,2123488,2135474,2152810,2169459,2186249,2201471,2214983,2222915,2238068,2252896,2268502,2281003,2297455,2307847,2315709,2323993,2339486,2352853,2366267,2378679,2388603,2394899,2401738,2412593,2423893,2435032,2446122,2454628,2460492,2467432,2478672,2490707,2500822,2511133,2519288,2524161,2531348,2541727,2553510,2563250,2573214,2580995,2586229,2593036,2603155,2612785,2622731,2632317,2641003,2646479,2653231,2663198,2673232,2683735,2694096,2702263,2707897]
            }, {
                label : "Recovered",
                color : "#1ee0ac",
                background: 'transparent',
                data: [53420103,53801139,54119793,54427332,54738209,55067318,55568616,55720482,56084099,56436501,56722105,57026974,57376662,57704330,57993944,58274039,58568166,58865142,59076014,59446501,59714542,59989871,60275966,60520805,60715486,61002428,61236346,61529475,61764895,61998370,62266954,62482336,62664252,62941920,63149733,63376397,63635735,63885527,64059860,64273970,64542114,64770070,65018915,65243619,65478218,65715080,65987788,66248385,66481260,66752219,67018306,67269415,67513321,67800666,68064462,68326909,68594204,68869800,69126704,69405049]
            }]
        },
        mapWorldChart = {
            labels : ["01 Jan","02 Jan","03 Jan","04 Jan","05 Jan","06 Jan","07 Jan","08 Jan","09 Jan","10 Jan","11 Jan","12 Jan","13 Jan","14 Jan","15 Jan","16 Jan","17 Jan","18 Jan","19 Jan","20 Jan","21 Jan","22 Jan","23 Jan","24 Jan","25 Jan","26 Jan","27 Jan","28 Jan","29 Jan","30 Jan","31 Jan","01 Feb","02 Feb","03 Feb","04 Feb","05 Feb","06 Feb","07 Feb","08 Feb","09 Feb","10 Feb","11 Feb","12 Feb","13 Feb","14 Feb","15 Feb","16 Feb","17 Feb","18 Feb","19 Feb","20 Feb","21 Feb","22 Feb","23 Feb","24 Feb","25 Feb","26 Feb","27 Feb","28 Feb","01 Mar","02 Mar","03 Mar","04 Mar","05 Mar","06 Mar","07 Mar","08 Mar","09 Mar","10 Mar","11 Mar","12 Mar","13 Mar","14 Mar","15 Mar","16 Mar","17 Mar","18 Mar","19 Mar","20 Mar","21 Mar","22 Mar","23 Mar","24 Mar","25 Mar","26 Mar","27 Mar","28 Mar","29 Mar","30 Mar","31 Mar","01 Apr","02 Apr","03 Apr","04 Apr","05 Apr","06 Apr","07 Apr","08 Apr","09 Apr","10 Apr","11 Apr","12 Apr","13 Apr","14 Apr","15 Apr","16 Apr","17 Apr","18 Apr","19 Apr","20 Apr","21 Apr","22 Apr","23 Apr","24 Apr","25 Apr","26 Apr","27 Apr","28 Apr","29 Apr","30 Apr","01 May","02 May","03 May","04 May","05 May","06 May","07 May","08 May","09 May","10 May","11 May","12 May","13 May","14 May","15 May","16 May","17 May","18 May","19 May","20 May","21 May","22 May"],
            dataUnit : 'People',
            lineTension : 0.1,
            datasets : [{
                label : "Active",
                color : "#0971fe",
                background: 'transparent',
                data: [0,343,324,308,334,344,423,356,268,350,368,264,403,267,251,232,272,130,223,266,237,175,277,253,99,194,122,298,290,232,253,198,183,150,217,233,212,0,245,201,351,445,268,413,425,439,482,499,574,603,585,551,641,551,955,826,0,734,722,716,777,0,0,1172,904,1037,0,1049,1433,1603,1637,1844,1872,1933,1921,2668,2913,2524,2826,2721,2625,2272,2932,2597,2966,2595,2950,2222,694,1884,2481,2857,2589,2906,2405,2652,3283,2881,4016,3445,4641,3912,4675,3613,3458,3779,4503,0,4578,4878,4787,4619,4679,4936,4720,3660,3813,4803,4422,3649,4085,2724,3161,2498,2534,2720,2255,2016,1614,1371,1363,1319,1163,1132,774,726,487,591,591,562,411,445]
            }, {
                label : "Deaths",
                color : "#f6525e",
                background: 'transparent',
                data: [0,5,3,2,6,3,4,2,7,5,1,3,2,3,3,1,3,4,4,4,3,3,2,1,1,0,1,3,0,0,1,3,1,2,2,0,2,0,2,3,3,2,1,2,3,3,2,2,4,4,4,4,4,5,7,9,0,6,2,4,5,0,0,5,5,3,0,1,3,6,11,2,7,7,12,8,14,23,17,18,21,19,26,33,18,33,37,31,31,33,35,27,25,29,33,27,34,40,37,33,36,37,36,35,39,37,40,0,75,50,52,58,53,37,46,54,54,37,49,39,55,62,48,40,48,47,43,51,47,31,32,35,41,35,22,9,11,14,11,9,8,7,
]
            }, {
                label : "Recovered",
                color : "#1ee0ac",
                background: 'transparent',
                data:[0,204,225,324,234,270,270,274,257,270,325,334,294,278,383,169,339,336,390,249,282,306,365,272,123,380,197,191,228,268,190,238,258,190,176,140,126,0,240,264,219,176,166,212,201,220,324,228,196,196,474,427,400,425,406,962,0,437,518,593,508,0,0,513,793,1024,0,713,713,700,765,863,816,1158,873,999,1003,1013,1372,1561,1564,1764,1783,1875,1567,2867,2824,1907,720,1394,2231,2372,2780,2542,2894,2532,2890,2165,1103,1820,2309,2788,2518,2848,3416,3615,3880,0,3997,3456,4638,3848,4651,3556,3392,3772,4488,4585,4576,4847,4773,4596,4048,4915,4682,3740,3771,4759,4362,3602,4035,2641,3084,2486,2511,2705,2220,2220,1611,1366,1362,1317,
]
            }]
        };
</script>
</body>

<!-- Mirrored from covstats.themenio.com/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 May 2021 10:24:01 GMT -->
</html>