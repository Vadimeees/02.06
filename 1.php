<form method="post">
    <label>
        Введите градус:
        <input type="number" name="deg">
    </label>
    <button type="submit" name="go">Посчитать</button>
</form>
 
<?php
if (isset($_POST['go']) && $_POST['deg'] !== '') {
    $deg = $_POST['deg'];
    $hour = floor(12 / 360 * $deg);
    switch ($hour) {
        case 1:
            $msg = "Прошел %d час!";
            break;
        case 2:
        case 3:
        case 4:
            $msg = "Прошло %d часа!";
        break;
        default:
            $msg = "Прошло %d часов!";
        break;
    }
    echo sprintf($msg, $hour);
}
?>