<?php

   error_reporting(E_ALL);
   ini_set("display_errors", "on");
   
   $server    = "spring-2022.cs.utexas.edu";
   $user      = "cs329e_bulko_granhold";
   $password  = "badly4Shirt2glassy";
   $dbName    = "cs329e_bulko_granhold";

   // Connect to MySQL Server
   $mysqli = new mysqli($server, $user, $password, $dbName);

   if ($mysqli->connect_errno) {
      die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
   }
  
   //Select Database
   $mysqli->select_db($dbName) or die($mysqli->error);
   
   // Retrieve data from Query String
   $sort = $_GET['sort'];
   $category = $_GET['category'];
   $genre = $_GET['genre'];
   
   // Escape User Input to help prevent SQL Injection
   $sort = $mysqli->real_escape_string($sort);
   $category = $mysqli->real_escape_string($category);
   $genre = $mysqli->real_escape_string($genre);

   //build query
   if ($genre == "*") {
    $query = "SELECT `Poster`, `Title`, `Release`, `MovieID` FROM Movie WHERE `Type` = '$category' ORDER BY Title ASC";
   } else {
    $query = "SELECT `Poster`, `Title`, `Release`, `MovieID` FROM Movie WHERE `Type` = '$category' AND (GenreOne = '$genre' OR GenreTwo = '$genre') ORDER BY Title ASC";
   }

   //Execute query
   $result = $mysqli->query($query) or die($mysqli->error);
   
   //Build Result String
   $display_string = "<table class = 'directory-table'>";
   $count = 1;
   // Insert a new row in the table for each film returned
   while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($count%4 == 1){
        $display_string .= "<tr>";
    }
    $display_string .= "<td>";
    $display_string .= "<div class='grid-item'>";
    $display_string .= "<img class = 'poster-img' src='$row[Poster]'>";
    $display_string .= "<a href='./$row[MovieID].php'><p>$row[Title] ($row[Release])</p></a>";
    $display_string .= "</div>";
    $display_string .= "</td>";
    if ($count%4 == 0){
        $display_string .= "</tr>";
    }
    $count++;

   }
   $display_string.="</table>";
  echo $display_string;

?>