<?php

// ------------------ Start the PNWDBArray Function

function PNWDBArray() {
  
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
$resetQuery = "UPDATE endTheTrend SET coachUse='0' WHERE coachName='coachName 00';";
$selectResult = mysql_query($selectQuery);

  
  if ($selectResult) {

      while($r = mysql_fetch_array($selectResult)) {

          $name = $r["$cNameField"];
          $city = $r["$cCityField"];
          $story = $r["$cStoryField"];
          $statement = $r["$cStatementField"];
          $pic = $r["$cPicField"];
          $status = $r["$cStatusField"];

          if ($status < "1") {
//              echo "\"$name\",\"$city\",\"$story\",\"$statement\",\"$pic\",\"$status\"<br>";
//              echo "UPDATE endTheTrend SET coachUse = '$status' WHERE coachName = '$name';";
                $updateQuery = "UPDATE endTheTrend SET coachUse = '1' WHERE coachName = '$name';";
                $supdateResult = mysql_query($updateQuery);
                $updateResult;

              $cPHPArray = array("$name", "$city", "$story", "$statement", "$pic", "$status");

              $cJSONString = json_encode($cPHPArray);
              echo "$cJSONString";

              exit();
          }
      }
    
      echo "Please Reset the Database";
  }
  
}

PNWDBArray();

mysqli_close();

?>