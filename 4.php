<FORM method= "POST" action="">

<INPUT name="min" type="text">
<BR><BR>
<INPUT type="submit" value= "Отправить" name = "do"><BR>
</FORM>
<?php
 
$n = $_POST["min"];
 
$s = 0;
 
$n_ = 1;
 
$eq_s = '';
 
while( $n_ <= $n ) {
    
    $s += pow($n_, $n_);
    
    $eq_s .= "$n_^$n_".( $n_ < $n ? ' + ' : '');
    
    $n_ ++ ;
}
 
echo "$eq_s = $s"; 
?>