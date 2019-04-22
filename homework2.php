<style>
	*{border: 0; outline: 0; margin: 0; padding: 0;}
	body {
		min-height: 100%;
		display: flex;
		flex-flow: column;
		font-size: 25px;
	}
</style>

<?php

/* Задание 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/

$a = mt_rand(-10,10);
$b = mt_rand(-10,10);

echo "a = " . $a . "<br>";
echo "b = " . $b . "<br>";

if ($a >= 0 && $b >= 0) {
	$c = $a - $b;
	echo "a - b = $c" . "<br>";
} elseif ($a < 0 && $b < 0) {
	$c = $a * $b;
	echo "a * b = $c" . "<br>";
} elseif ($a < 0 && $b >= 0 || $a >= 0 && $b < 0) {
	$c = $a + $b;
	echo "a + b = $c" . "<br>" . "<br>";
}

/* Задание 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/
//Для вывода всех заданий я поменяю имена переменных

$c = mt_rand(0,15);

switch ($c) {
	case '0':
		echo "0";
	case '1':
		echo "1";
	case '2':
		echo "2";
	case '3':
		echo "3";
	case '4':
		echo "4";
	case '5':
		echo "5";
	case '6':
		echo "6";
	case '7':
		echo "7";
	case '8':
		echo "8";
	case '9':
		echo "9";
	case '10':
		echo "10";
	case '11':
		echo "11";
	case '12':
		echo "12";
	case '13':
		echo "13";
	case '14':
		echo "14";
	case '15':
		echo "15";
		break;
	default:
		echo "Неизвестное значение: " . $c;
		break;
}

/* Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/

function addition($d, $e) {
	echo "<br>";
	echo "<br>";
	echo "Сложение: ";
	return $d + $e . "<br>";
}

function substraction ($d, $e) {
	echo "Разность: ";
	return $d - $e . "<br>";
}

function multiply ($d, $e) {
	echo "Умножение: ";
	return $d * $e . "<br>";
}

function divide ($d, $e) {
	if ($d != 0 && $e != 0) {
		echo "Деление: ";
		return $d / $e . "<br>";
	} else {
		echo "На ноль делить нельзя";
	}
}

echo addition(mt_rand(2,8),mt_rand(2,8));
echo substraction(mt_rand(7,15),mt_rand(7,15));
echo multiply(mt_rand(1,10),mt_rand(1,10));
echo divide(mt_rand(2,30),mt_rand(2,30));

/* Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "addition":
			return addition($arg1, $arg2);
			break;
		case "substraction":
			return substraction($arg1, $arg2);
			break;
		case "multiply":
			return multiply($arg1, $arg2);
			break;
		case "divide":
			return divide($arg1, $arg2);
			break;	
	}
}

echo mathOperation(mt_rand(2,8),mt_rand(2,8),addition) . "<br>";
echo mathOperation(mt_rand(7,15),mt_rand(7,15),substraction) . "<br>";
echo mathOperation(mt_rand(1,10),mt_rand(1,10),multiply) . "<br>";
echo mathOperation(mt_rand(2,30),mt_rand(2,30),divide) . "<br>";

$currentYear = date("Y");

function timeVariables () {
	$h = date("H");
	$i = date("i");

	if ($h == 1 || $h == 21) {
		$hours = " час";
	} elseif (($h >= 2 && $h <= 4) || ($h >= 22 && $h <= 24)) {
		$hours = " часа";
	} else {$hours = " часов";}
	
	if (($i < 20 || $i > 10)) {
		$minutes = " минут";
	} elseif (($i % 10) === 1) {
		$minutes = " минута";
	} elseif ((($i % 10) >= 2) && (($i % 10) <= 4)) {
		$minutes = " минуты";
	} else {
		$minutes = " минут";
	}
	return $h . $hours . " " . $i . $minutes;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<header><?= timeVariables()?></header>
	<main></main>
	<!--Задание 5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.-->
	<footer><?=$currentYear?></footer>
</body>
</html>