<?php
$arrCount = 10;
	for ($i1 = 0; $i1 < $arrCount; $i1++) {
		$item = $arr2[] = (real)rand(1, 100);
		echo $item. "<br>";
	}
	$res1 = 1;
	foreach ($arr2 as $key => $item) {
		if ($item > 0 && !($key % 2)){
			echo $item . "<br>";
				$res1 = $res1 * $item;
		}
		if ($item > 0 && ($key % 2)){
			echo "По условию (больше нуля и не парный индекс) - " . $item . "<br>";
		}
	}
	echo "Произведение по условию (больше нуля и парный индекс) - $res1";
?>	