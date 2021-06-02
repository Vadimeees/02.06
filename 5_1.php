<?php


function array_fill_rand($limit, $min=false, $max=false)
{
	$limit = (int)$limit;
	$array = array();
	
	if ($min !== false && $max !== false)
	{
		$min = (int)$min;
		$max = (int)$max;
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand($min, $max);
		}
	}
	else
	{
		for ($i=0; $i<$limit; $i++)
		{
			$array[$i] = rand();
		}
	}
	
	return $array;
}

echo '<pre>';


$rand_array = array_fill_rand(5);
print_r($rand_array);


$rand_array = array_fill_rand(10);
print_r($rand_array);


$rand_array = array_fill_rand(5, 0, 10);
print_r($rand_array);


$rand_array = array_fill_rand(10, -100, 100);
print_r($rand_array);

echo '</pre>';

?>