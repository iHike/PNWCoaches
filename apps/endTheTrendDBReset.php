<?php

// ------------------ Start the PNWDBArray Function

function PNWDBArray() {
  
  echo "Fuck 01";
  
// Variables for connecting to your database

$hostname = "localhost";
$username = "pnwcoaches";
$dbname = "pnwcoaches";
$password = "Bozeman1803!";
$usertable = "endTheTrend";

// SQL Fields for JSON
$cNameField = "coachName";
$cCityField = "coachCity";
$cStoryField = "coachStory";
$cStatementField = "coachStatement";
$cPicField = "coachPic";
$cStatusField = "coachUse";

$cJSONString = "";

//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to connect to database! Please try again later.");
mysql_select_db($dbname);

//Fetching from your database table.
$selectQuery = "SELECT * FROM $usertable";
$countQuery = "SELECT * FROM $usertable";
$resetQuery = "UPDATE endTheTrend SET coachUse='0' WHERE coachName='coachName 00';";
$selectResult = mysql_query($selectQuery);

  if ($selectResult) {
    
      $recordCount = "select count(*) from endTheTrend;
      $updateQuery = "UPDATE endTheTrend SET coachUse = '1' WHERE coachName = '$name';
      echo $recordCount;
      echo "Fuck 02";
      
      }

}

PNWDBArray();

mysqli_close();

?>