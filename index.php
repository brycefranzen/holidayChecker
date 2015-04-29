<?php 
date_default_timezone_set("America/Los_Angeles");


function checkHoliday($date){	
	$year = substr($date, 0, 4); 
	$holiday = "";
	$notHoliday = "NULL";

	switch ($date) {
	    case $year.'-01-01':
	        $holiday = 'New Year\'s Day';
	        break;
	    case date("Y-m-d", strtotime($year.'-01-00, third monday')):
	        $holiday = 'Martin Luther King Day';
	        break;
	    case date("Y-m-d", strtotime($year.'-02-00, third monday')):
	        $holiday = 'President\'s Day';
	        break;
        case date("Y-m-d", strtotime("last Monday of May $year")):
	        $holiday = 'Memorial Day';
	        break;
	    case $year.'-07-03': 
	    	if (date("D", strtotime($date)) == "Fri"){
	       		$holiday = 'observed Independence Day';
	       	}
	       	else {
	       		$holiday = $notHoliday;
	       	}
	        break;
        case $year.'-07-05': 
        	if (date("D", strtotime($date)) == "Mon"){
	       		$holiday = 'observed Independence Day';
	       	}
	       	else {
	       		$holiday = $notHoliday;
	       	}
	        break;
	    case $year.'-07-04':
	       	$holiday = 'Independence Day';
	        break;
		case date("Y-m-d", strtotime($year.'-09-00, first monday')):
	        $holiday = 'Labor Day';
	        break;
	    case date("Y-m-d", strtotime($year.'-10-00, second monday')):
	        $holiday = 'Columbus Day';
	        break;
	    case $year.'-10-31':
	        $holiday = 'Halloween';
	        break;
	    case $year.'-11-11':
	        $holiday = 'Veterans Day';
	        break;
	    case date("Y-m-d", strtotime($year.'-11-00, fourth thursday')):
	        $holiday = 'Thanksgiving';
	        break;
        case date("Y-m-d", strtotime($year.'-11-00, fourth thursday + 1 day')):
	        $holiday = 'Black Friday';
	        break;
	    case $year.'-12-24':
	        $holiday = 'Christmas Eve';
	        break;
	    case $year.'-12-25':
	        $holiday = 'Christmas Day';
	        break;
        case $year.'-12-31':
	        $holiday = 'New Year\'s Eve';
	        break;
	    default:
       		$holiday = $notHoliday;
	}

	return $holiday;
}
