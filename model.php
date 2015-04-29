<?php
date_default_timezone_set("America/Los_Angeles");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include $_SERVER['DOCUMENT_ROOT'].'/library/functions.php';

//All Daily Hours______________________________________________________________________
function getAllDailyHours(){
   $conn = databaseConnection();
    
    try{
        $sql = 'SELECT dayNumber, dayHours FROM hours';
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $_SESSION['message'] = 'Error retrieving all shop hours';
    }

    if(is_array($data)){
       return $data;
    }
    else{
        return FALSE;
    }
}

//UPDATE All Daily Hours______________________________________________________________________
function updateDailyHours($sun, $mon, $tue, $wed, $thu, $fri, $sat) {
    $conn = databaseConnection();
    try{
      $sql = 'UPDATE hours 
              SET dayHours = 
              CASE dayNumber
              WHEN 0 THEN :sun
              WHEN 1 THEN :mon
              WHEN 2 THEN :tue
              WHEN 3 THEN :wed
              WHEN 4 THEN :thu
              WHEN 5 THEN :fri
              WHEN 6 THEN :sat
              END';
        
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':sun', $sun, PDO::PARAM_STR);
      $stmt->bindValue(':mon', $mon, PDO::PARAM_STR);
      $stmt->bindValue(':tue', $tue, PDO::PARAM_STR);
      $stmt->bindValue(':wed', $wed, PDO::PARAM_STR);
      $stmt->bindValue(':thu', $thu, PDO::PARAM_STR);
      $stmt->bindValue(':fri', $fri, PDO::PARAM_STR);
      $stmt->bindValue(':sat', $sat, PDO::PARAM_STR);
      $stmt->execute();
      $rowcount = $stmt->rowCount(); //How many rows were affected
      $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $_SESSION['message'] = "Error with database 'UpdateDailyHours'";
        include 'index.php';
        exit;
    }
    
        if ($rowcount) {
          return TRUE; // A successful Update
        } 
        else {
          return FALSE; // A failed Update
        }
}

function getAllHolidayHours() {
  $conn = databaseConnection();
    
    try{
        $sql = 'SELECT holidayName, holidayHours FROM holidays';
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $_SESSION['message'] = 'Error retrieving all shop hours';
    }

    if(is_array($data)){
       return $data;
    }
    else{
        return FALSE;
    }
}

function updateHolidayHours($NewYearsDay, $PresidentsDay, $MemorialDay, $IndependenceDay, $LaborDay, $Halloween, $Thanksgiving, $BlackFriday, $ChristmasEve, $Christmas, $NewYearsEve) {
  $conn = databaseConnection();
    try{
      $sql = 'UPDATE holidays 
              SET holidayHours = 
              CASE holiday_id
              WHEN 1 THEN :NewYearsDay
              WHEN 2 THEN :PresidentsDay
              WHEN 3 THEN :MemorialDay
              WHEN 4 THEN :IndependenceDay
              WHEN 5 THEN :LaborDay
              WHEN 6 THEN :Halloween
              WHEN 7 THEN :Thanksgiving
              WHEN 8 THEN :BlackFriday
              WHEN 9 THEN :ChristmasEve
              WHEN 10 THEN :Christmas
              WHEN 11 THEN :NewYearsEve
              END';
        
      $stmt = $conn->prepare($sql);
      $stmt->bindValue(':NewYearsDay', $NewYearsDay, PDO::PARAM_STR);
      $stmt->bindValue(':PresidentsDay', $PresidentsDay, PDO::PARAM_STR);
      $stmt->bindValue(':MemorialDay', $MemorialDay, PDO::PARAM_STR);
      $stmt->bindValue(':IndependenceDay', $IndependenceDay, PDO::PARAM_STR);
      $stmt->bindValue(':LaborDay', $LaborDay, PDO::PARAM_STR);
      $stmt->bindValue(':Halloween', $Halloween, PDO::PARAM_STR);
      $stmt->bindValue(':Thanksgiving', $Thanksgiving, PDO::PARAM_STR);
      $stmt->bindValue(':BlackFriday', $BlackFriday, PDO::PARAM_STR);
      $stmt->bindValue(':ChristmasEve', $ChristmasEve, PDO::PARAM_STR);
      $stmt->bindValue(':Christmas', $Christmas, PDO::PARAM_STR);
      $stmt->bindValue(':NewYearsEve', $NewYearsEve, PDO::PARAM_STR);
      $stmt->execute();
      $rowcount = $stmt->rowCount(); //How many rows were affected
      $stmt->closeCursor();
        
    } catch (PDOException $ex) {
        $_SESSION['message'] = "Error with database 'UpdateHolidayHours'";
        include 'index.php';
        exit;
    }
    
    if ($rowcount) {
      return TRUE; // A successful Update
    } 
    else {
      return FALSE; // A failed Update
    }
}