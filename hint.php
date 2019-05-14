<?php

$names = array(
	"Anna", "Brittany", "Cinderella", "Diana", "Eva", "Fiona", "Gunda", "Hege", "Inga", "Johanna", "Kitty", "Linda", "Nina", "Ophelia", "Petunia", "Amanda", "Raquel", "Cindy", "Doris", "Eve", "Evita", "Sunniva", "Tove", "Unni", "Violet", "Liza", "Elizabeth", "Ellen", "Wenche", "Vicky"
);

$str = $_POST['str'];
$hint = [];

if(!empty($str)) {
	$str = strtolower($str);
	$len = strlen($str);

	foreach($names as $name) {
		if(stristr($str, substr($name, 0, $len))) {
			$hint[] = $name;
		}
	}
}

if(count($hint) != 0) {
	sort($hint);
	echo implode(', ', $hint);
} else {
	echo 'no suggestions';
}