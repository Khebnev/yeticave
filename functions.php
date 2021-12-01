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
	$time_min = floor($time_diff / 60);
	// print('Завтра наступит через ' . $time_min . ' мин/');

?>