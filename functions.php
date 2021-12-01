<?php
 require_once('./index.php');
?>
<?php 
	date_default_timezone_set('Europe/Moscow');
	$cur_day = time();
	// print('Сейчас в Москве ' . $cur_day . ' секунд <br>');

	$next_midnight = strtotime('tomorrow');
	// print('Завтра наступит в ' . $next_midnight . ' секунд <br>');

	$time_diff = $next_midnight - $cur_day;
	// print('Завтра наступит через ' . $time_diff . ' секунд. <br>');
	$time_hours = floor($time_diff / 3600);
	// print('Завтра наступит через ' . $time_hours . ' ч. <br>');
	$time_min = (floor($time_diff / 60) % 60); //лкругляет до минут с помощью остатка от деления
	// print('Завтра наступит через ' . $time_min . ' мин/');
	// print('Осталось ' . $time_min . ' минут');
	
?>

<!-- <?php 
	function remaining($ts) {
		$time_diff = $ts - $_SERVER['REQUEST_TIME'];
		$time_return = '00:00:00';
		if ($time_diff > 0) {
			$hour = floor($time_diff / 3600);
			$min_ts = $time_diff - $hour * 3600;
			$min = floor(min_ts / 60);
			$sec = $time_diff - $hour * 3600 - $min * 60;
			$time_return = sprintf('%02d:%02d:%02d', $hour, $min, $sec);
		}
		return $time_return;

	}
?> -->