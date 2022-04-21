<!DOCTYPE html>

<html lang="en">

<head>
   <title>ShortForm</title>
   <meta charset="UTF-8">
   <meta name="description" content="A page dedicated to showcasing various short medias">
   <meta name="author" content="ENTER NAME HERE">
   <link rel="stylesheet" href="../Header/Header.css">
   <link rel="icon" href="Logo.svg">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head> 

<body >
  <ul>
    <li>
      <a href="../Homepage/Body.php"><img src="../Header/Logo.png" alt="ShortForm logo" class="logo"></a>
    </li>
    <li class="dropdown">
      <a href="../Directory/Directory.php" class="dropbtn">Film</a>
      <div class="dropdown-content">
        <a href="#">Short Films</a>
        <a href="#">Documentaries</a>
        <a href="#">Commercials</a>
        <a href="#">Experimentals</a>
      </div>
    </li>

    <li class="dropdown">
      <a href="../Directory/Directory.php" class="dropbtn">Collection</a>
      <div class="dropdown-content">
        <a href="#">Editorials</a>
        <a href="#">Film Festivals</a>
        <a href="#">School Screenings</a>
      </div>
    </li>

    <li class="dropdown">
      <a href="../Directory/Directory.php"  class="dropbtn">People</a>
      <div class="dropdown-content">
        <a href="#">Cast</a>
        <a href="#">Crew</a>
        <a href="#">Production Companies</a>
        <a href="#">Advertising Agentcies</a>
      </div>
    </li>

    <li class="dropdown">
      <a href="../Submit-a-Film/submissions.php" class="dropbtn">Submit a Film!</a>
    </li>

    <li class="dropdown">
      <a href="../ContactUs/ContactUs.php" class="dropbtn">Contact Us</a>
    </li>
    <li class="searchbar">
      <!-- Need php for a proper search, this is placeholder-->
      <form>
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </li>
  </ul>
</body>
</html>