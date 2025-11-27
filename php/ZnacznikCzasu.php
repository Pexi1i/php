<?php
$czas = mktime(11,14,54,8,12,2014);
echo "Created date is " . date("d.m.y h:i:sa", $czas);
//mktime - (hour, minute, second, month ,day ,year);