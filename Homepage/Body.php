<!DOCTYPE html>
<html>

<head>
  <title>ShortForm</title>
  <meta charset="UTF-8">
  <meta name="description" content="A page dedicated to showcasing various short medias">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="icon" href="Logo.svg">
  <link rel="stylesheet" href="Body.css">
  <script src="Body.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <?php include('../Header/Header.php') ?>
  <div id="featured">
    <!-- This carousel was created referencing this tutorial: 
    https://www.w3schools.com/howto/howto_js_slideshow.asp -->
    <div class="slideshow-container">
      <div class="mySlides">
        <div class="numbertext">1 / 3</div>
        <img src="img1.jpg">


        <div class="text">
          <h1>Ladybird (2017)</h1>
          Caption One
        </div>
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="img2.jpg">
        <div class="text">
          <h1>Ladybird (2017)</h1>
          Caption Two
        </div>
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="img3.jpg">
        <div class="text">
          <h1>Ladybird (2017)</h1>
          Caption Three
        </div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

  </div>

  <div class="row" id="mid-content">
    <div class="column">
      <h3>Featured Films</h3>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#" class="more">See more</a>
    </div>
    <div class="column">
      <h3>Featured Collections</h3>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>

      <a href="#" class="more">See more</a>

    </div>
    <div class="column" id="news">
      <h3>Industry News</h3>
      <article>Article here</article>

      <article>Article here</article>

      <article>Article here</article>

      <article>Article here</article>
      <a href="#" class="more">See more</a>

    </div>
  </div>
  <div class="row" id="trending">
    <h3>Trending Now</h3>
    <div id="trending-container">
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
      <div><a href="#"><img src="img5.jpg"></a></div>
    </div>
    <a href="#" class="more">See more</a>
  </div>

  <?php include('../Footer/Footer.php') ?>
</body>

</html>