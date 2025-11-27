<p>dodanie elementów</p>
<?php
$a1=array(0,1,2,3);
$a2=array(5,6);
array_splice($a1,1,0,$a2); //0 oznacza dodanie elementów , 1 oznacza na pozycje
print_r($a1);
?>