<style>
	*{border: 0; outline: 0; margin: 0; padding: 0;}
	body {
		min-height: 100%;
		display: flex;
		flex-flow: column;
		font-size: 25px;
		margin-left: 20px;
	}
	.region {
		font-weight: bold;
	}
	.tasks {
		margin-bottom: 10px;
		font-family: Luminari, fantasy;
		font-style: oblique;
	}
.main_nav {
	display: flex;
	align-items: center;
	justify-content: space-around;
	margin-left: 30px;
}

.main_nav li {
	margin-right: 28px;
}

.main_nav li,
.main_nav a {
	list-style: none;
	text-decoration: none;
	font-size: 14px;
	font-family: "Montserrat", sans-serif;
	color: rgb(255, 255, 255);
	line-height: 1.2;
}

.main_nav ul {
	padding-left: 0;
	display: flex;
	flex-direction: row;
	justify-content: space-around;
	margin-top: 40px;
}

.main_nav a:hover {
	color: orange;
}

</style>


<?php 
/* Задание 1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.*/
echo "<div class=\"tasks\">Задание 1</div>";

$i = 0;
$l = 100;

while ($i <= $l) {
	if ($i % 3 == 0) {
		echo "$i<br>";
	}
	$i++;
}

echo "<br>";

/* Задание 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – это ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/
echo "<div class=\"tasks\">Задание 2</div>";

$n = 0;

do {
	if ($n % 2 !== 0) {
		echo $n . "- это нечетное число" . "<br>";
	}
	else if ($n !== 0 && $n % 2 === 0) {
		echo $n . "- это четное число" . "<br>";
	}
	else {
		echo $n . "- это ноль" . "<br>";
	}
	$n++;
} while ($n < 11);

echo "<br>";

/* Задание 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)*/
echo "<div class=\"tasks\">Задание 3</div>";

$regionsAndCities = [
	"Московская область" => ["Москва", "Зеленоград", "Клин"],
	"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
	"Рязанская область" => ["Михайлов", "Кораблино", "Кадом", "Касимов", "Лесной"]
];

foreach ($regionsAndCities as $region => $city) {
	echo "<div class=\"region\">$region: </div><br>";
	foreach ($city as $concreteCity) {
		echo "<div>$concreteCity</div><br>";
	}
}

/* Задание 4,5,9. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку. Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).*/
echo "<div class=\"tasks\">Задание 4,5,9</div>";

function transLiteration ($someText){
	$alphabet = [
	"а" => "a",
	"б" => "b",
	"в" => "v",
	"г" => "g",
	"д" => "d",
	"е" => "ye",
	"ё" => "yo",
	"ж" => "zh",
	"з" => "z",
	"и" => "i",
	"к" => "k",
	"л" => "l",
	"м" => "m",
	"н" => "n",
	"о" => "o",
	"п" => "p",
	"р" => "r",
	"с" => "s",
	"т" => "t",
	"у" => "u",
	"ф" => "f",
	"х" => "kh",
	"ц" => "ts",
	"ч" => "ch",
	"ш" => "sh",
	"щ" => "tch",
	"ъ" => "",
	"ы" => "y",
	"ъ" => "\'",
	"э" => "e",
	"ю" => "yu",
	"я" => "ya", 
	" " => "_",
	"А" => "A",
	"Б" => "B",
	"В" => "V",
	"Г" => "G",
	"Д" => "D",
	"Е" => "Ye",
	"Ё" => "Yo",
	"Ж" => "Zh",
	"З" => "Z",
	"И" => "I",
	"К" => "K",
	"Л" => "L",
	"М" => "M",
	"Н" => "N",
	"О" => "O",
	"П" => "P",
	"Р" => "R",
	"С" => "S",
	"Т" => "T",
	"У" => "U",
	"Ф" => "F",
	"Х" => "Kh",
	"Ц" => "Ts",
	"Ч" => "Ch",
	"Ш" => "Sh",
	"Щ" => "Tch",
	"Ъ" => "",
	"Ы" => "Y",
	"Ъ" => "\'",
	"Э" => "E",
	"Ю" => "Yu",
	"Я" => "Ya",
	];

	return strtr($someText, $alphabet);
}

echo "<br>" . transLiteration("А Сначала Все Было таким сложным") . "<br>";

echo "<br>";

/* Задание 7. Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так:
for (…){ // здесь пусто}*/
echo "<div class=\"tasks\">Задание 7</div>";

for ($g=0; $g < 10; print $g++ . "<br>") {}

echo "<br>";

/* Задание 8. Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».*/
echo "<div class=\"tasks\"»>Задание 8</div>";

$regionsAndCities = [
	"Московская область" => ["Москва", "Зеленоград", "Клин"],
	"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
	"Рязанская область" => ["Михайлов", "Кораблино", "Кадом", "Касимов", "Лесной"]
];

foreach ($regionsAndCities as $region => $city) {
	echo "<div class=\"region\">$region: </div><br>";
	foreach ($city as $concreteCity) {
		if (mb_substr($concreteCity, 0, 1, "UTF-8") == "К") {
			echo "<div>$concreteCity</div><br>";
		}
	}
}

/* Задание 6. В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.*/
echo "<div class=\"tasks\">Задание 6</div>";

$mainMenu = [
	[
		"title" => "Главная",
		"link" => "/"
	],
	[
		"title" => "Услуги",
		"link" => "/services",
		"enclosure" => [
			[
				"title" => "Разработка веб-сайтов",
				"link" => "/services/website_development"
			],
			[
				"title" => "CEO-оптимизация",
				"link" => "/services/ceo_optimization"
			],
			[
				"title" => "Контекстная реклама",
				"link" => "/services/context_ad"
			]
		]
	],
	[
		"title" => "О компании",
		"link" => "about_company",
		"enclosure" => [
			[
				"title" => "Наша миссия",
				"link" => "/about_company/out_mission"
			],
			[
				"title" => "История",
				"link" => "/about_company/history"
			],
			[
				"title" => "Портфолио",
				"link" => "/about_company/portfolio"
			]
		]
	],
	[
		"title" => "Контакты",
		"link" => "/contacts"
	]
]; 

function generateMenu($items) {
	echo "<nav>";
	echo "<ul>";

	foreach ($items as $item) {
		$link = $item["link"];
		$title = $item["title"];
		echo "<li>";
		echo "<a href=\"$link\">$title</a>";
		if (isset($item["enclosure"])) {
			generateMenu($item["enclosure"]);
		}
		echo "</li>";
	}

	echo "</ul>";
	echo "</nav>";
}

echo "<br>";

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?=generateMenu($mainMenu)?>
</body>
</html>
