<!DOCTYPE html>
<html>

<head>
  <title>ShortForm</title>
  <meta charset="UTF-8">
  <meta name="description" content="A page dedicated to showcasing various short medias">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="icon" href="Logo.svg">
  <link rel="stylesheet" href="submissions.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="submissions.js" defer></script>
  <script src="add-fields.js" ></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
   $(document).ready(function(){
  $('input[type=checkbox]').change(function(e) {
  if ($('input[type=checkbox]:checked').length > 3) {
    $(this).prop('checked', false)
  }
})
   })

  </script>

</head>

<body>
<?php include('../Header/Header.php') ?>
<h1> ShortForm </h1>
<article id = "instr"> Thank you for your interest in adding a project to our library. 
  To ensure your project has the best chance of being approved, please read the acceptance lines below.
Click on the headings to expand the content.</article>

<form id = "guidelines">
<button type="button" class="collapsible">Title Formats</button>
<div class="content">
<article>We use the original title of a movie/show in its original language as it appears on screen in the opening credits.</article>
</div>
<button type="button" class="collapsible">Capitalization</button>
<div class="content">
<article>
Capitalization is language dependent. The relevant language is the language of the country origin so be careful with titles in English which are made from non-English words as in El Cid or La Bamba.</li>
<ul>
<li> English, Portuguese, Hebrew, Indian languages: All capital letters at the start of words, with a few exceptions.</li>
  <li>
   English language words which must begin with a lower-case letter (unless at the end of a title) are: a an and as at by for from in of on or the to with
   </li>
   <li>French, Italian, Spanish, Scandinavian languages, Hungarian, Dutch, Slovenian, Serbian, Croatian, Russian, Japanese, Mandarin, Cantonese:All lower-case letters at the start of words, except first word plus some exceptions (names etc.)</li>
  <li>German: Mixed </li>
</ul>
</article>
</div>

<button type="button" class="collapsible">Eligibility: General Public Interest</button>
<div class="content">
<article>For a work to be eligible for inclusion in the database it must be of general public interest and should be available to the public or have been available in the past. We accept most music videos, commercials, experimental films and short films. </article>
</div>

<button type="button" class="collapsible">Completing the Form</button>
<div class="content">
  <article>Titles are not automatically added; the data is sent to the title managers who will verify the existence and eligibility of the title and, if acceptable, add it. 
  The more information you provide, the more chance we will be able to verify the title and add it to the database. </article>
</div>
</form> 
<div id = "form-container">
<form class="submission-form" method="post">
  
      <div class = "form-elem">
      Title: <input type="text" name="Title" required> 
      </div>
      <div class = "form-elem">
      Year: <input type="text" name="Year" pattern="\d{4}" title="Please enter a valid year" required> 
      </div>
      <div class = "form-elem">
      Type: 
      <select name="Type" required>
      <option disabled selected value> -- select an option -- </option>
      <option value="short">Short Film</option>
      <option value="mv">Music Video</option>
      <option value="experimental">Experimental</option>
      <option value="commerical">Commercial</option>
      </select>
      </div>
      <div class = "form-elem">
      Genre(s) (Select up to 3) <br>
      <input type="checkbox" name="genre" value="drama">Drama<br>
      <input type="checkbox" name="genre" value="comedy">Comedy<br>
      <input type="checkbox" name="genre" value="romance">Romance<br>
      <input type="checkbox" name="genre" value="action">Action<br>
      <input type="checkbox" name="genre" value="thriller">Thriller<br>
      <input type="checkbox" name="genre" value="scifi">Science Fiction<br>
      <input type="checkbox" name="genre" value="crime">Crime<br>
      <input type="checkbox" name="genre" value="musical">Musical<br>
      <input type="checkbox" name="genre" value="fantasy">Fantasy<br>
      <input type="checkbox" name="genre" value="horror">Horror<br>
      <input type="checkbox" name="genre" value="western">Western
      </div>
      <div class = "form-elem">
      Mature Content? <input type="checkbox" name="mature" value="yes"> Yes 
      </div>
      <div class = "form-elem">
      Logline: <br> <textarea rows="2" cols="50" name="logline" required placeholder ="2-3 sentence summary or description"></textarea> 
    </div>
    <div class = "form-elem">
      Synopsis: <br> <textarea rows="4" cols="50" name="synopsis" placeholder ="(optional) A brief outline of the core concept, major plot points, and main character arcs"></textarea>
  </div>
  <div class = "form-elem">
      Poster: <input type="file" id="poster" name="poster" required>
      Other Media: <input type="file" id="media" name="media">
  </div>
  <div class = "form-elem">
      Producers:
<div class="producer_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_producer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Directors:
<div class="director_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_director" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Writers:
<div class="writer_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_writer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Story by:
<div class="story_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_story" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Cast:
<div class="cast_fields">
  <div>
    <input type="text" name="field_name[]" id="actor" placeholder ="Name of Actor"/> <input type="text" name="field_name[]" id="role" placeholder ="Role"/> 
    <a href="javascript:void(0);" class="add_cast" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Composers:
<div class="composer_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_composer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Cinematographers:
<div class="cinematographer_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_cinematographer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Editors:
<div class="editor_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_editor" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Casting Director:
<div>
<input type="text" name="field_name[]" value="" />
</div>
  </div>

  <div class = "form-elem">
Production Designer:
<input type="text" name="field_name[]" value="" />
</div>

<div class = "form-elem">
Art Direction:
<input type="text" name="field_name[]" value="" />
</div>

<div class = "form-elem">
Set Decoration:
<input type="text" name="field_name[]" value="" />
</div>

<div class = "form-elem">
Costume Designer:
<input type="text" name="field_name[]" value="" />
</div>

<div class = "form-elem">
Hair and Makeup:
<div class="hmua_fields">
  <div>
    <input type="text" name="field_name[]" value="" />
    <a href="javascript:void(0);" class="add_hmua" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div> <br>


<input type="submit" name="submit" value="Submit">
  </div>
    </form>
   </div>

<?php include('../Footer/Footer.php') ?>
</body>

</html>

