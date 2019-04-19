<?php
	$headerH1 = "<h1>Первый заголовок, сгенерированный с помощью php</h1>";
	$mainHeader = "<header>$headerH1</header>";
	$headTitle = "<title>Homework 1</title>";
	$currentData = "2019";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<?php
		echo "$headTitle";
	?>
</head>
<body>
	<?php
		echo "$mainHeader";
	?>
	<main>

	</main>
	<footer>
		<?php
			$a = 5;
			$b = '05';
			var_dump($a == $b);         // Почему true? равенство не строгое и здесь идет сравнение по значению переменной, а не типу, поэтому true
			var_dump((int)'012345');     // Почему 12345? Потому, что int - приведение к числу и строка 012345 преобразуется в 12345
			var_dump((float)123.0 === (int)123.0); // Почему false? Сравнение строгое по типу и значению, float - дробное число, int - целое, поэтому false
			var_dump((int)0 === (int)'hello, world'); // Почему true? Строка не 0, поэтому условие выполняется
			$c = 1;
			$d = 2;

			$c = $c + $d;
			$d = $c - $d;
			$c = $c - $d;

			echo "<br> $c <br> $d";
		?>
		<?php 
			echo "<br>$currentData";
		?>
	</footer>
</body>
</html>
