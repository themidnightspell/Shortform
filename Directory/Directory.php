<!DOCTYPE html>
<html>

<head>
  <title>ShortForm</title>
  <meta charset="UTF-8">
  <meta name="description" content="A page dedicated to showcasing various short medias">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="icon" href="Logo.svg">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<script language = "javascript" type = "text/javascript">

//Browser Support Code
function ajaxFunction(){
  var ajaxRequest;  // The variable that makes Ajax possible!
  
  ajaxRequest = new XMLHttpRequest();
  
  // Create a function that will receive data sent from the server and will update
  // the div section in the same page.
  
  ajaxRequest.onreadystatechange = function(){
    if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('directory-container');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
    }
  }
  
  // Now get the value from user and pass it to server script.
  sort = document.querySelector('input[name="sort"]:checked').value;
  category = document.querySelector('input[name="category"]:checked').value;
  genre = document.querySelector('input[name="genre"]:checked').value;

  queryString = "?sort=" + sort;
  queryString +=  "&category=" + category;
  queryString +=  "&genre=" + genre;
  
  ajaxRequest.open("GET", "DirectoryHelper.php" + queryString, true);
  ajaxRequest.send(null);
}

</script>

  <?php include('../Header/Header.php') ?>
  <form method="POST" id='myForm'> 
        
    <div class="filterBox">
      <h1>Sort</h1>   
      
      <input name="sort" type="radio" id="releaseDate" value="releaseDate">
      <label for="releaseDate">Release Date</label><br>
      
      <input name="sort" type="radio" id="alphabetical" value="alphabetical" checked>
      <label for="alphabetical">Alphabetical</label><br>
    </div>

    <div class="filterBox">
      <h1>Category</h1>
      
      <input name="category" type="radio" id="shortfilms" value="short" checked>
      <label for="shortfilms">Shortfilms</label><br>

      <input name="category" type="radio" id="experimentals" value="experimentals">
      <label for="experimentals">Experimentals</label><br>

    
      <input name="category" type="radio" id="musicvideos" value="musicvideos">
      <label for="musicvideos">Music Videos</label><br>

      <input name="category" type="radio" id="commercials" value="commercials">
      <label for="commercials">Commercials</label>
    </div>
    
    <div class="filterBox">
      <h1>Genre</h1>

      <input name="genre" type="radio" id="All" value="*" checked>
      <label for="All">All</label><br>
      
      <input name="genre" type="radio" id="action" value="Action">
      <label for="action">Action</label><br>
    
      <input name="genre" type="radio" id="comedy" value="Comedy">
      <label for="comedy">Comedy</label><br>

      <input name="genre" type="radio" id="crime" value="Crime">
      <label for="crime">Crime</label><br>
    
      <input name="genre" type="radio" id="drama" value="Drama">
      <label for="drama">Drama</label><br>

      <input name="genre" type="radio" id="Fantasy" value="Fantasy">
      <label for="fantasy">Fantasy</label><br>
      
      <input name="genre" type="radio" id="horror" value="Horror">
      <label for="horror">Horror</label><br>

      <input name="genre" type="radio" id="musical" value="Musical">
      <label for="musical">Musical</label><br>

      <input name="genre" type="radio" id="romance" value="Romance">
      <label for="romance">Romance</label><br>

      <input name="genre" type="radio" id="sci-fi" value="Sci-fi">
      <label for="sci-fi">Science Fiction</label><br>

      <input name="genre" type="radio" id="thriller" value="Thriller">
      <label for="thriller">Thriller</label><br>

      <input name="genre" type="radio" id="western" value="Western">
      <label for="western">Western</label><br>
    </div>
    
    <input id="submit" class="buttons" type="button" value="Filter" onclick="ajaxFunction()">
    <input class="buttons" type="reset" value="Clear">
    
  </form>
    
  <div id="directory-container">
  </div>
    
 <?php // include('../Footer/Footer.php') ?>
</body>