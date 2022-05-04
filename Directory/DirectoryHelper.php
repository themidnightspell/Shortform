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
    $query = "SELECT `Poster`, `Title`, `Release` FROM Movie WHERE `Type` = '$category' ORDER BY Title ASC";
   } else {
    $query = "SELECT `Poster`, `Title`, `Release` FROM Movie WHERE `Type` = '$category' AND (GenreOne = '$genre' OR GenreTwo = '$genre') ORDER BY Title ASC";
   }

   //Execute query
   $result = $mysqli->query($query) or die($mysqli->error);
   
   //Build Result String
   $display_string = "";
   // Insert a new row in the table for each person returned
   while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $display_string .= "<div class='grid-item'>";
    $display_string .= "<img src='$row[Poster]'>";
    $display_string .= "<p>$row[Title] ($row[Release])</p>";
    $display_string .= "</div>";
   }
  echo $display_string;

?>