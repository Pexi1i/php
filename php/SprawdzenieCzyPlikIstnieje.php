<?php
$filename = `/path/to/foo.txt`;
if(file_exists($filename)){
    echo "The File $filename exists";
} else {
    echo "the file $filename does not exist";
}
?>