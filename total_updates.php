<?php

ini_set("max_execution_time", "-1");
ini_set("memory_limit", "-1");

$cordata = file_get_contents ("https://api.covid19india.org/data.json");
$jdata=json_decode($cordata,true);

$tcount = count($jdata['cases_time_series']);
$total=$jdata['cases_time_series'][$tcount-1]['totalconfirmed'];

$active=$jdata['cases_time_series'][$tcount-1]['dailyconfirmed'];

$recover=$jdata['cases_time_series'][$tcount-1]['dailyrecovered'];

$death=$jdata['cases_time_series'][$tcount-1]['dailydeceased'];

$ct=count($jdata['tested']);
$cases=$jdata['tested'][$ct-1]['totalindividualsvaccinated'];
$fdose=$jdata['tested'][$ct-1]['firstdoseadministered'];
$sdose=$jdata['tested'][$ct-1]['seconddoseadministered'];
  
  
  $tc= count($jdata['statewise']);
  $mc=$jdata['statewise'][$tc-17]['confirmed'];
  $ma=$jdata['statewise'][$tc-17]['active'];
  $mr=$jdata['statewise'][$tc-17]['recovered'];
  $md=$jdata['statewise'][$tc-17]['deaths'];
  $time=$jdata['statewise'][$tc-17]['lastupdatedtime'];
  
  $india=$jdata['statewise'][$tc-38]['confirmed'];
  $an=$jdata['statewise'][$tc-37]['confirmed'];
  $ap=$jdata['statewise'][$tc-36]['confirmed'];
  $ar=$jdata['statewise'][$tc-35]['confirmed'];
  $as=$jdata['statewise'][$tc-34]['confirmed'];
   $br=$jdata['statewise'][$tc-33]['confirmed'];
  $ch=$jdata['statewise'][$tc-32]['confirmed'];
  $cth=$jdata['statewise'][$tc-31]['confirmed'];
  $dn=$jdata['statewise'][$tc-30]['confirmed'];
  $dl=$jdata['statewise'][$tc-29]['confirmed'];
   $ga=$jdata['statewise'][$tc-28]['confirmed'];
  $gj=$jdata['statewise'][$tc-27]['confirmed'];
  $hr=$jdata['statewise'][$tc-26]['confirmed'];
  $hp=$jdata['statewise'][$tc-25]['confirmed'];
  $jk=$jdata['statewise'][$tc-24]['confirmed'];
   $jh=$jdata['statewise'][$tc-23]['confirmed'];
  $ka=$jdata['statewise'][$tc-22]['confirmed'];
  $kl=$jdata['statewise'][$tc-21]['confirmed'];
  $la=$jdata['statewise'][$tc-20]['confirmed'];
  $ld=$jdata['statewise'][$tc-19]['confirmed'];
   $mp=$jdata['statewise'][$tc-18]['confirmed'];
  $mh=$jdata['statewise'][$tc-17]['confirmed'];
  $mn=$jdata['statewise'][$tc-16]['confirmed'];
  $ml=$jdata['statewise'][$tc-15]['confirmed'];
  $mz=$jdata['statewise'][$tc-14]['confirmed'];
   $nl=$jdata['statewise'][$tc-13]['confirmed'];
  $or=$jdata['statewise'][$tc-12]['confirmed'];
  $py=$jdata['statewise'][$tc-11]['confirmed'];
  $pb=$jdata['statewise'][$tc-10]['confirmed'];
  $rj=$jdata['statewise'][$tc-9]['confirmed'];
   $sk=$jdata['statewise'][$tc-8]['confirmed'];
  $a=$jdata['statewise'][$tc-7]['confirmed'];
  $tn=$jdata['statewise'][$tc-6]['confirmed'];
  $tj=$jdata['statewise'][$tc-5]['confirmed'];
  $tr=$jdata['statewise'][$tc-4]['confirmed'];
   $ut=$jdata['statewise'][$tc-3]['confirmed'];
  $up=$jdata['statewise'][$tc-2]['confirmed'];
  $wb=$jdata['statewise'][$tc-1]['confirmed'];
 
  
 
				
?>