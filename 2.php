<?php
 echo "Введите параметры";
?>

<form method="post">
<label>
<input name="min" type="text">
<button type="submit" value= "Отправить" name = "do">Узнать цвет</button>
</label>
</form>

<?php
$color = "неизвестен";
if (isset($_POST['do']) && ($_POST['min'] != ""))
{
$min = $_POST["min"];
$time = $min % 5;
if ($min == 1 or $time == 1 )
{$color = "Зеленый";}
if ($min == 2 or $time == 2 )
{$color = "Зеленый";}
if ($min == 3 or $time == 3 )
{$color = "Зеленый";}
if ($min == 4 or $time == 4 )
{$color = "Красный";}
if ($min == 5 or $time == 0 )
{$color = "Красный";}
}
else 
{
   
}
    echo "Цвет светофора " . "$color" ; 
?>