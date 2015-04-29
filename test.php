<?php

include 'index.php';

$holiday = checkHoliday('2015-11-11');

if ($holiday == 'NULL'){
	$holiday = "NOT a Holiday";
}

echo date("Y-m-d") . " is " . $holiday;
