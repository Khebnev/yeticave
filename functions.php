<?php
 require_once('./index.php');
?>
<?php 

/**
 * Функция-шаблонизатор
 *
 * @param string $template_name Имя PHP-шаблона (без расширения)
 * @param array $data Массив с данными для шаблона
 * @param string $template_file Путь к файлу шаблона
 *
 * @return string $output Итоговый HTML-код из шаблона, где элементы $data заменены их значениями
 */

function include_template($template_name, $data) {
	$template_file = 'templates/' . $template_name . '.php';
	if (file_exists($template_file)) {
		ob_start();
		include($template_file);
		$output = ob_get_clean();
	} else {
		$output = '';
	}
	return $output;
}

?>


<?php 
	function esc($str) {
		$text = htmlspecialchars($str);
		return $text;
	}
?>
<?php 
	date_default_timezone_set('Europe/Kiev');
	$cur_day = time();
	// print('Сейчас в Москве ' . $cur_day . ' секунд <br>');

	$next_midnight = strtotime('tomorrow');
	// print('Завтра наступит в ' . $next_midnight . ' секунд <br>');

	$time_diff = $next_midnight - $cur_day;
	// print('Завтра наступит через ' . $time_diff . ' секунд. <br>');
	$time_hours = floor($time_diff / 3600);
	// print('Завтра наступит через ' . $time_hours . ' ч. <br>');
	$time_min = (floor($time_diff / 60) % 60); //округляет до минут с помощью остатка от деления
	// print('Завтра наступит через ' . $time_min . ' мин/');
	// print('Осталось ' . $time_min . ' минут');
	
?>

 <?php 
	function remaining($ts) {
		date_default_timezone_set('Europe/Kiev');
		$ts = time();
		$next_midnight = strtotime('tomorrow');
		$time_diff = $next_midnight - $ts;
		$time_hours = floor($time_diff / 3600);
		$time_min = (floor($time_diff / 60) % 60); //округляет до минут с помощью остатка от деления
		$time_return = $time_hours . ':' . $time_min;
		return $time_return;
		}
		
?> 
<!-- <?php 
	$time_until_tomorow = remaining(1);
	print($time_until_tomorow);
?> -->