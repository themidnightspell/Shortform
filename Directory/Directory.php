<?php 


?>

<!DOCTYPE html>
<html>

<head>
  <title>ShortForm</title>
  <meta charset="UTF-8">
  <meta name="description" content="A page dedicated to showcasing various short medias">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="icon" href="Logo.svg">
  <link rel="stylesheet" href="main.css">
  <script src="Body.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <?php include('../Header/Header.php') ?>
  <form id="filters"> 
    
    <div class="filterBox">
      <h1>Display</h1>   
      
      <input name="display" type="radio" id="grid" value="grid">
      <label for="grid">Grid</label><br>
      
      <input name="display" type="radio" id="list" value="list">
      <label for="list">list</label><br>
    
      <input name="display" type="radio" id="meta" value="meta">
      <label for="meta">Metadata</label>
    </div>
    
    <div class="filterBox">
      <h1>Sort</h1>   
      
      <input name="sort" type="radio" id="releaseDate" value="releaseDate">
      <label for="releaseDate">Release Date</label><br>
      
      <input name="sort" type="radio" id="alphabetical" value="alphabetical">
      <label for="alphabetical">Alphabetical</label><br>
    </div>

    <div class="filterBox">
      <h1>Category</h1>
      
      <input name="category[]" type="checkbox" id="shortfilms" value="shortfilms">
      <label for="shortfilms">Shortfilms</label><br>

      <input name="category[]" type="checkbox" id="experimentals" value="experimentals">
      <label for="experimentals">Experimentals</label><br>

    
      <input name="category[]" type="checkbox" id="musicvideos" value="musicvideos">
      <label for="musicvideos">Music Videos</label><br>

      <input name="category[]" type="checkbox" id="commercials" value="commercials">
      <label for="commercials">Commercials</label>
    </div>
    
    <div class="filterBox">
      <h1>Genre</h1>
      
      <input name="genre[]" type="checkbox" id="action" value="action">
      <label for="action">Action</label><br>
    
      <input name="genre[]" type="checkbox" id="comedy" value="comedy">
      <label for="comedy">Comedy</label><br>

      <input name="genre[]" type="checkbox" id="crime" value="crime">
      <label for="thrille">Crime</label><br>
    
      <input name="genre[]" type="checkbox" id="drama" value="drama">
      <label for="romance">Drama</label><br>

      <input name="genre[]" type="checkbox" id="Fantasy" value="Fantasy">
      <label for="romance">Fantasy</label><br>
      
      <input name="genre[]" type="checkbox" id="horror" value="horror">
      <label for="romance">Horror</label><br>

      <input name="genre[]" type="checkbox" id="musical" value="musical">
      <label for="romance">Musical</label><br>

      <input name="genre[]" type="checkbox" id="romance" value="romance">
      <label for="romance">Romance</label><br>

      <input name="genre[]" type="checkbox" id="sci-fi" value="sci-fi">
      <label for="romance">Science Fiction</label><br>

      <input name="genre[]" type="checkbox" id="thriller" value="thriller">
      <label for="romance">Thriller</label><br>

      <input name="genre[]" type="checkbox" id="western" value="western">
      <label for="romance">Western</label><br>
    </div>
    
    <input id="submit" class="button" type="submit" value="Filter">
    <input class="button" type="reset" value="Clear">
    
  </form>
    
  <div id="directory-container">
      
      <div class="row">
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
      </div>
      
      <div class="row">
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
      </div>
      
      <div class="row">
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
          <div class="column">
              <img src="poster.jpg">
              <p>Gravity (2013)</p>
          </div>
      </div>
      
  </div>
    
  <?php include('../Footer/Footer.php') ?>
</body>