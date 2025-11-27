<?php
//h- 12 hour format of an hour with leading zeros (01 to 12)
//i - minutes with leading zeros (00 to 59)
//s - seconds with leading zeros (00 to 59)
//a - lowercase ante meridiem and post meridiem (amd or pm)

echo "The time is " .date("h:i:sa");