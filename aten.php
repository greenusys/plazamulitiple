<?php
	$checkTime = strtotime('09:00:59');
	echo 'Check Time : '.date('H:i:s', $checkTime);
	echo '<hr>';
	
	$loginTime = strtotime('10:01:00');
	$diff = $checkTime - $loginTime;
	echo 'Login Time : '.date('H:i:s', $loginTime).'<br>';
	echo ($diff < 0)? 'Late!' : 'Right time!'; echo '<br>';
	// echo 'Time diff in sec: '.abs(gmdate("H:i:s", $diff));
	echo 'Time diff in sec: '.secToHR(abs($diff));
	echo '<hr>';
	
	$loginTime = strtotime('09:00:59');
	$diff = $checkTime - $loginTime;
	echo 'Login Time : '.date('H:i:s', $loginTime).'<br>';
	echo ($diff < 0)? 'Late!' : 'Right time!';
	echo 'Time diff in sec: '.secToHR(abs($diff));
	echo '<hr>';
	
	$loginTime = strtotime('09:00:00');
	$diff = $checkTime - $loginTime;
	echo 'Login Time : '.date('H:i:s', $loginTime).'<br>';
	echo ($diff < 0)? 'Late!' : 'Right time!';
	echo 'Time diff in sec: '.secToHR(abs($diff));
	function secToHR($seconds) {
		$hours = floor($seconds / 3600);
		$minutes = floor(($seconds / 60) % 60);
		$seconds = $seconds % 60;
		return "$hours:$minutes:$seconds";
	  }
?>
