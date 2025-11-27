<?php
$myfile = fopen("webdictionary.txt", "r");
or die("unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
fclose($myfile);