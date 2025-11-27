<?php
// outputs e.g. somefile.txt: 1024bites
$filename = `somefile.txt`;
echo $filename . `;` . filesize($filename) . `bytes`;