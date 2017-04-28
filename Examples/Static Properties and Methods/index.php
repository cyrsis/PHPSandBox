<?php

require_once 'classes/Count.php';
$counter = new Count();
$counter->increment();
echo $counter->getCount();


?>