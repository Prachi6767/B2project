<?php

ini_set("max_execution_time", "-1");
ini_set("memory_limit", "-1");

$ngpdata = file_get_contents ("https://api.covid19india.org/state_district_wise.json");
$jngp=json_decode($ngpdata,true);


$t_cm=$jngp['Maharashtra']['districtData']['Nagpur']['confirmed'];

$t_a=$jngp['Maharashtra']['districtData']['Nagpur']['active'];

$t_r=$jngp['Maharashtra']['districtData']['Nagpur']['recovered'];

$t_d=$jngp['Maharashtra']['districtData']['Nagpur']['deceased'];


$ah=$jngp['Maharashtra']['districtData']['Ahmednagar']['confirmed'];
$ak	=$jngp['Maharashtra']['districtData']['Akola']['confirmed'];
$am=$jngp['Maharashtra']['districtData']['Amravati']['confirmed'];
$au=	$jngp['Maharashtra']['districtData']['Aurangabad']['confirmed'];
$bd=	$jngp['Maharashtra']['districtData']['Beed']['confirmed'];
$bh=	$jngp['Maharashtra']['districtData']['Bhandara']['confirmed'];
$bd=	$jngp['Maharashtra']['districtData']['Buldhana']['confirmed'];
$cd=	$jngp['Maharashtra']['districtData']['Chandrapur']['confirmed'];
$dh=	$jngp['Maharashtra']['districtData']['Dhule']['confirmed'];
$gd=	$jngp['Maharashtra']['districtData']['Gadchiroli']['confirmed'];
$gn=	$jngp['Maharashtra']['districtData']['Gondia']['confirmed'];
$hg=	$jngp['Maharashtra']['districtData']['Hingoli']['confirmed'];
$jg=	$jngp['Maharashtra']['districtData']['Jalgaon']['confirmed'];
$jl=	$jngp['Maharashtra']['districtData']['Jalna']['confirmed'];
$kl=	$jngp['Maharashtra']['districtData']['Kolhapur']['confirmed'];
$lt=	$jngp['Maharashtra']['districtData']['Latur']['confirmed'];
$mum=	$jngp['Maharashtra']['districtData']['Mumbai']['confirmed'];
$ng=	$jngp['Maharashtra']['districtData']['Nagpur']['confirmed'];
$nd=	$jngp['Maharashtra']['districtData']['Nanded']['confirmed'];
$ndb=	$jngp['Maharashtra']['districtData']['Nandurbar']['confirmed'];
	$ns=$jngp['Maharashtra']['districtData']['Nashik']['confirmed'];
	$os=$jngp['Maharashtra']['districtData']['Osmanabad']['confirmed'];
	$pg=$jngp['Maharashtra']['districtData']['Palghar']['confirmed'];
	$pb=$jngp['Maharashtra']['districtData']['Parbhani']['confirmed'];
	$pn=$jngp['Maharashtra']['districtData']['Pune']['confirmed'];
	$rg=$jngp['Maharashtra']['districtData']['Raigad']['confirmed'];
	$rt=$jngp['Maharashtra']['districtData']['Ratnagiri']['confirmed'];
	$sg=$jngp['Maharashtra']['districtData']['Sangli']['confirmed'];
	$st=$jngp['Maharashtra']['districtData']['Satara']['confirmed'];
	$sd=$jngp['Maharashtra']['districtData']['Sindhudurg']['confirmed'];
	$sl=$jngp['Maharashtra']['districtData']['Solapur']['confirmed'];
	$th=$jngp['Maharashtra']['districtData']['Thane']['confirmed'];
	$wd=$jngp['Maharashtra']['districtData']['Wardha']['confirmed'];
	$ws=$jngp['Maharashtra']['districtData']['Washim']['confirmed'];
	$yt=$jngp['Maharashtra']['districtData']['Yavatmal']['confirmed'];
	
?>