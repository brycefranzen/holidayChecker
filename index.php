<?php
date_default_timezone_set("America/Los_Angeles");

if(!$_SESSION){
    session_start();
 }
 if (!$_SESSION['is_logged_in'] =1
){
         // not logged in move to login page
         header('Location: /coupons/adminLogin.php');
         exit;
     }

require $_SERVER['DOCUMENT_ROOT'].'/admin/hours/model.php';

if ($_GET['action'] == 'editHours'){
    $hours = getAllDailyHours();
    $holidays = getAllHolidayHours();
  
    $sunday = stripcslashes($hours[0][1]);
    $monday = stripcslashes($hours[1][1]);
    $tuesday = stripcslashes($hours[2][1]);
    $wednesday = stripcslashes($hours[3][1]);
    $thursday = stripcslashes($hours[4][1]);
    $friday = stripcslashes($hours[5][1]);
    $saturday =  stripcslashes($hours[6][1]);

    $NewYearsDay = stripcslashes($holidays[0][1]);
    $PresidentsDay = stripcslashes($holidays[1][1]);
    $MemorialDay = stripcslashes($holidays[2][1]);
    $IndependenceDay = stripcslashes($holidays[3][1]);
    $LaborDay = stripcslashes($holidays[4][1]);
    $Halloween = stripcslashes($holidays[5][1]);
    $Thanksgiving = stripcslashes($holidays[6][1]);
    $BlackFriday = stripcslashes($holidays[7][1]);
    $ChristmasEve = stripcslashes($holidays[8][1]);
    $Christmas = stripcslashes($holidays[9][1]);
    $NewYearsEve = stripcslashes($holidays[10][1]);
    
    include 'hours.php';
    exit;
}

if ($_POST['action'] == 'updateDailyHours') {
    $sun = addslashes($_POST['sunday']);
    $mon = addslashes($_POST['monday']);
    $tue = addslashes($_POST['tuesday']);
    $wed = addslashes($_POST['wednesday']);
    $thu = addslashes($_POST['thursday']);
    $fri = addslashes($_POST['friday']);
    $sat = addslashes($_POST['saturday']);
    
    $results = updateDailyHours($sun, $mon, $tue, $wed, $thu, $fri, $sat);
    
    if($results){
        $_SESSION['message']= "Daily hours updated successfully";    
    }
    else{
        $_SESSION['message']="There was an error OR no changes were made.";
    }
    header('Location: /admin/hours/.?action=editHours');
    exit;
}

if ($_POST['action'] == "updateHolidayHours") {
    $NewYearsDay = addslashes($_POST['NewYearsDay']);
    $PresidentsDay = addslashes($_POST['PresidentsDay']);
    $MemorialDay = addslashes($_POST['MemorialDay']);
    $IndependenceDay = addslashes($_POST['IndependenceDay']);
    $LaborDay = addslashes($_POST['LaborDay']);
    $Halloween = addslashes($_POST['Halloween']);
    $Thanksgiving = addslashes($_POST['Thanksgiving']);
    $BlackFriday = addslashes($_POST['BlackFriday']);
    $ChristmasEve = addslashes($_POST['ChristmasEve']);
    $Christmas = addslashes($_POST['Christmas']);
    $NewYearsEve = addslashes($_POST['NewYearsEve']);

    $results = updateHolidayHours($NewYearsDay, $PresidentsDay, $MemorialDay, $IndependenceDay, $LaborDay, $Halloween, $Thanksgiving, $BlackFriday, $ChristmasEve, $Christmas, $NewYearsEve);

    if($results){
        $_SESSION['message']= "Holiday Hours updated successfully";    
    }
    else{
        $_SESSION['message']="There was an error OR no changes were made.";
    }

    header('Location: /admin/hours/.?action=editHours');
    exit;
}


//IF NOTHING ELSE
else {
    header('Location: /admin/hours/.?action=editHours');
    exit;
}
