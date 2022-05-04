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
        <img src="https://pbs.twimg.com/media/EUiEBWuXsAUSnHw?format=jpg&name=large">


        <div class="text">
        <a href = "../Directory/2.php"><h1>Wish Upon a Snowman (2020)</h1></a>
        On Christmas Eve, a girl builds a snowman. She goes to bed wishing for a present but receives an unexpected surprise.  </div>
      </div>

      <div class="mySlides">
        <div class="numbertext">2 / 3</div>
        <img src="https://m.media-amazon.com/images/M/MV5BM2ExNjk1ODctOTU4Mi00ZTYxLThiZjgtMWU3ZjMyZjM1MTMyXkEyXkFqcGdeQXVyODUxNjI1MzQ@._V1_.jpg">
        <div class="text">
        <a href = "../Directory/1.php"><h1>Bao (2018)</h1></a>
          A Chinese-Canadian woman suffering from empty nest syndrome gets a second shot at motherhood when one of her handmade dumplings comes alive.   
        </div>
      </div>

      <div class="mySlides">
        <div class="numbertext">3 / 3</div>
        <img src="https://storage.googleapis.com/ff-storage-p01/press_kits/posters/001/877/705/original/28fd0e83f3-poster.jpg?1633999050">
        <div class="text">
        <a href = "../Directory/3.php"><h1>Toyah (2022)</h1></a>
        Listen to the people of Toyah, echoes of a challenging present in the Chihuahuan desert.   
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
  <!-- <table id = body-table>
    <td>
    <div class="column">
      <a href="../Directory/1.php"> <img src="https://tldrmoviereviewsblog.files.wordpress.com/2018/06/bao-banner.jpg">
</a>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
    </div>
</td>
<td>

    <div class="column">
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
      <a href="#"><img src="img4.jpg"></a>
    </div>
</td>
<td>

    <div class="column" id="news">
      <article class='articles'>
        <a href="https://www.wect.com/2022/03/27/uncw-student-wins-tiktok-contest-produces-short-film-with-netflix/"><img src='article3.jpg' class='images' alt='The Refugee logo, Netflix'></a>
          <a href="https://www.wect.com/2022/03/27/uncw-student-wins-tiktok-contest-produces-short-film-with-netflix/" class='headline'><b>UNCW students wins TikTok contest, produces short film with Netflix</b></a> <br>
          <p class='headline'>WECT, written by Kassie Simmons</p> <br>
          <p class='headline'>March 27th, 2022</p> <br>
          <p class='headline'>Image credited to Netflix</p>
      </article>

      <br>

      <article class='articles'>
        <a href="https://apnews.com/article/immigration-oscars-entertainment-arts-and-entertainment-riz-ahmed-6c9da35867ddc676850e21f7f3279f73"><img src='article2.jpeg' class='images' alt='Riz Ahmed in "The Long Goodbye"'></a>
          <a href="https://apnews.com/article/immigration-oscars-entertainment-arts-and-entertainment-riz-ahmed-6c9da35867ddc676850e21f7f3279f73" class='headline'><b>In a blistering Oscar short film, Riz Ahmed finds cartharsis</b></a> <br>
          <p class='headline'>AP News, written by Jake Coyle</p> <br>
          <p class='headline'>March 24th, 2022</p> <br>
          <p class='headline'>Image credited to SomeSuch and Left Handed Films via AP</p>
      </article>

      <br>
      <br>

      <article class='articles'>
        <a href="https://www.nytimes.com/2022/03/03/movies/new-york-childrens-film-festival.html"><img src='article1.webp' class='images' alt='"Where is Anne Frane" directed by Ari Folman'></a>
          <a href="https://www.nytimes.com/2022/03/03/movies/new-york-childrens-film-festival.html" class='headline'><b>'We Are a Film Festival First.' A Focus on Children Comes Second</b></a>
          <p class='headline'>The New York Times, written by Laurel Graeber</p> <br>
          <p class='headline'>March 3rd, 2022</p> <br>
          <p class='headline'>Image credited to Purple Whale Films via New York Times</p>
      </article>


    </div>
</td>

</table> -->
<div class="column" id="news">
  <h2>Industry News</h2>
<table id = 'body-table'>
  <tr>
  <td>
  <article class='articles'>
        <a href="https://www.wect.com/2022/03/27/uncw-student-wins-tiktok-contest-produces-short-film-with-netflix/"><img src='article3.jpg' class='images' alt='The Refugee logo, Netflix'></a>
          <a href="https://www.wect.com/2022/03/27/uncw-student-wins-tiktok-contest-produces-short-film-with-netflix/" class='headline'><b>UNCW students wins TikTok contest, produces short film with Netflix</b></a> <br>
          <p class='headline'>WECT, written by Kassie Simmons</p> <br>
          <p class='headline'>March 27th, 2022</p> <br>
          <p class='headline'>Image credited to Netflix</p>
      </article>
</td>
<td>
<article class='articles'>
        <a href="https://apnews.com/article/immigration-oscars-entertainment-arts-and-entertainment-riz-ahmed-6c9da35867ddc676850e21f7f3279f73"><img src='article2.jpeg' class='images' alt='Riz Ahmed in "The Long Goodbye"'></a>
          <a href="https://apnews.com/article/immigration-oscars-entertainment-arts-and-entertainment-riz-ahmed-6c9da35867ddc676850e21f7f3279f73" class='headline'><b>In a blistering Oscar short film, Riz Ahmed finds cartharsis</b></a> <br>
          <p class='headline'>AP News, written by Jake Coyle</p> <br>
          <p class='headline'>March 24th, 2022</p> <br>
          <p class='headline'>Image credited to SomeSuch and Left Handed Films via AP</p>
      </article>

</td>
<td>
<article class='articles'>
        <a href="https://www.nytimes.com/2022/03/03/movies/new-york-childrens-film-festival.html"><img src='article1.webp' class='images' alt='"Where is Anne Frane" directed by Ari Folman'></a>
          <a href="https://www.nytimes.com/2022/03/03/movies/new-york-childrens-film-festival.html" class='headline'><b>'We Are a Film Festival First.' A Focus on Children Comes Second</b></a>
          <p class='headline'>The New York Times, written by Laurel Graeber</p> <br>
          <p class='headline'>March 3rd, 2022</p> <br>
          <p class='headline'>Image credited to Purple Whale Films via New York Times</p>
      </article>
</td>
</tr>
</table>
</div>
  </div>

  <?php include('../Footer/Footer.php') ?>
</body>

</html>