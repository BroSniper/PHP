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

if ($a >= 0 & $b >= 0) {
	$c = $a - $b;
	echo "a - b = $c" . "<br>";
} elseif ($a < 0 & $b < 0) {
	$c = $a * $b;
	echo "a * b = $c" . "<br>";
} elseif ($a < 0 & $b >= 0 || $a >= 0 & $b < 0) {
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
	return $d + $e . "<br>";
}

function substraction ($d, $e) {
	return $d - $e . "<br>";
}

function multiplication ($d, $e) {
	return "Умножение: " . $d * $e . "<br>";
}

function division ($d, $e) {
	if ($d != 0 & $e != 0) {
		return "Деление: " . $d / $e . "<br>";
	} else {
		echo "На ноль делить нельзя";
	}
}

echo addition(2,8);
echo substraction(7,15);
echo multiplication(9,12);
echo division(46,2);

/* Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		case "addition":
			return addition($arg1, $arg2);
			break;
		case "substraction":
			return substraction ($arg1, $arg2);
			break;
		case "multiplication":
			return multiplication ($arg1, $arg2);
			break;
		case "division":
			return division ($arg1, $arg2);
			break;	
	}
}

echo mathOperation(2,10,division) . "<br>";

$currentYear = date("Y");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<header></header>
	<main></main>
	<footer><?=$currentYear?></footer>
</body>
</html>