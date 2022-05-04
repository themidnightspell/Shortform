<!DOCTYPE html>
<html>

<head>
  <title>ShortForm</title>
  <meta charset="UTF-8">
  <meta name="description" content="A page dedicated to showcasing various short medias">
  <meta name="author" content="ENTER NAME HERE">
  <link rel="icon" href="Logo.svg">
  <link rel="stylesheet" href="submissions.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <option value="commercial">Commercial</option>
      </select>
      </div>
      <div class = "form-elem" id = "genres">
      Genre(s) (Select up to 3) <br>
      <input type="checkbox" name="genre[]" value="drama" id = "drama" >Drama<br>
      <input type="checkbox" name="genre[]" value="comedy" id = "comedy" >Comedy<br>
      <input type="checkbox" name="genre[]" value="romance" id ="romance" >Romance<br>
      <input type="checkbox" name="genre[]" value="action" id = "action" >Action<br>
      <input type="checkbox" name="genre[]" value="thriller" id = "thriller" >Thriller<br>
      <input type="checkbox" name="genre[]" value="scifi" id = "scifi" >Science Fiction<br>
      <input type="checkbox" name="genre[]" value="crime" id = "crime" >Crime<br>
      <input type="checkbox" name="genre[]" value="musical" id = "musical" >Musical<br>
      <input type="checkbox" name="genre[]" value="fantasy" id = "fantasy">Fantasy<br>
      <input type="checkbox" name="genre[]" value="horror" id = "horror" >Horror<br>
      <input type="checkbox" name="genre[]" value="western" id = "western" >Western
      </div>
      <div class = "form-elem">
      Mature Content? <input type="radio" name="mature" value="yes"> Yes <input type="radio" name="mature" value="no"> No 
      </div>
      <div class = "form-elem">
      Logline: <br> <textarea rows="2" cols="50" name="logline" required placeholder ="2-3 sentence summary or description"></textarea> 
    </div>
    <div class = "form-elem">
      Synopsis: <br> <textarea rows="4" cols="50" name="synopsis" placeholder ="(optional) A brief outline of the core concept, major plot points, and main character arcs"></textarea>
  </div>
  <div class = "form-elem">
      Poster: <input type="url" name="poster" id="poster" placeholder="https://example.com" pattern="https://.*" required>
  </div>
  <!-- <div class = "form-elem">
      Producers:
<div class="producer_fields">
  <div>
    <input type="text" name="producer_field[]" value="" />
    <a href="javascript:void(0);" class="add_producer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Directors:
<div class="director_fields">
  <div>
    <input type="text" name="director_field[]" value="" />
    <a href="javascript:void(0);" class="add_director" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Writers:
<div class="writer_fields">
  <div>
    <input type="text" name="writer_field[]" value="" />
    <a href="javascript:void(0);" class="add_writer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Story by:
<div class="story_fields">
  <div>
    <input type="text" name="story_field[]" value="" />
    <a href="javascript:void(0);" class="add_story" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>


  <div class = "form-elem">
Composers:
<div class="composer_fields">
  <div>
    <input type="text" name="composer_field[]" value="" />
    <a href="javascript:void(0);" class="add_composer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Cinematographers:
<div class="cinematographer_fields">
  <div>
    <input type="text" name="cin_field[]" value="" />
    <a href="javascript:void(0);" class="add_cinematographer" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Editors:
<div class="editor_fields">
  <div>
    <input type="text" name="editor_field[]" value="" />
    <a href="javascript:void(0);" class="add_editor" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>

  <div class = "form-elem">
Casting Director:
<div>
<input type="text" name="casting_director" value="" />
</div>
  </div>

  <div class = "form-elem">
Production Designer:
<input type="text" name="production_designer" value="" />
</div>

<div class = "form-elem">
Art Direction:
<input type="text" name="art_direction" value="" />
</div>

<div class = "form-elem">
Set Decoration:
<input type="text" name="set_deco" value="" />
</div>

<div class = "form-elem">
Costume Designer:
<input type="text" name="costume" value="" />
</div>

<div class = "form-elem">
Hair and Makeup:
<div class="hmua_fields">
  <div>
    <input type="text" name="hmua_field[]" value="" />
    <a href="javascript:void(0);" class="add_hmua" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
  </div>
</div>
  </div>  -->

<div class = "form-elem">
Cast & Crew:
<div class="crew_fields">
<div>
  <input type="text" name="crew_field[]" value="" />
      <select name="crew_role[]" required>
      <option disabled selected value> -- select an option -- </option>
      <option value="Actor">Actor</option>
      <option value="Art Direction">Art Direction</option>
      <option value="Casting Director">Casting Director </option>
      <option value="Cinematographer">Cinematographer</option>
      <option value="Composer">Composer</option>
      <option value="Costume Designer">Costume Designer</option>
      <option value="Casting Director">Casting Director </option>
      <option value="Editor">Editor</option>
      <option value="Hair and Makeup">Hair and Makeup</option>
      <option value="Producer">Producer</option>
      <option value="Production Designer">Production Designer</option>
      <option value="Set Direction">Set Direction</option>
      <option value="Story By">Story By </option>
      <option value="Writer">Writer</option>
      </select>
  <a href="javascript:void(0);" class="add_crew" title="Add field"><img src="https://cdn-icons-png.flaticon.com/512/1237/1237946.png" height="12" /></a>
</div>
</div>
</div> 
  <br>
  

<input type="submit" name="submit" value="Submit">
<!-- <button type="button" onclick="validateResults()">Submit</button> -->

  </div>
    </form>
    <script defer>
      $('.submission-form').submit(function() {
        console.log('hi');
        if (!(document.getElementById("drama").checked || document.getElementById("comedy").checked || document.getElementById("romance").checked || document.getElementById("action").checked || document.getElementById("thriller").checked || document.getElementById("scifi").checked || document.getElementById("crime").checked || document.getElementById("musical").checked || document.getElementById("fantasy").checked || document.getElementById("horror").checked || document.getElementById("western").checked)){
          alert("Please select at least one genre.");
        }
      });
      </script>
   </div>
<?php
function insert() {
// Optionally store the parameters in variables
$server = "spring-2022.cs.utexas.edu";
$user = "cs329e_bulko_alyssal3";
$pwd = "Basis9clammy+adjust";
$dbName = "cs329e_bulko_alyssal3";

// Create connection
$conn = new mysqli($server, $user, $pwd, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Set User's inputs to variables we can use further down
$title = "'".$_POST["Title"]."'";
$year = $_POST["Year"];
$type = "'".$_POST['Type']."'";
$genre = $_POST['genre'];
$mature = $_POST['mature'];
$logline = "'".$_POST['logline']."'";
$synopsis = "'".$_POST['synopsis']."'";
$poster_tmp_name = "'".$_POST ['poster']."'";
// $producer = $_POST['producer_field'];
// $director = $_POST['director_field'];
// $writer = $_POST['writer_field'];
// $story = $_POST['story_field'];
// $composer = $_POST['composer_field'];
// $cin = $_POST['cin_field'];
// $editor = $_POST['editor_field'];
// $casting = "'".$_POST['casting_director']."'";
// $prod_des = "'".$_POST['production_designer']."'";
// $art = "'".$_POST['art_direction']."'";
// $set = "'".$_POST['set_deco']."'";
// $costume = "'".$_POST['costume']."'";
// $hmua = "'".$_POST['hmua_field']."'";


if ($mature == "yes"){
  $mature = 1;
}
else {
  $mature = 0;
}

$g1 = $genre[0];
if (count($genre) == 2){
  $g2 = $genre[1];
  $g3 = NULL;

}
else if (count($genre) == 3){
  $g2 = $genre[1];
  $g3 = $genre[2];
}


$sql = "INSERT INTO Movie (Title, year_no, Logline, Synopsis, Mature, category, Poster, GenreOne, GenreTwo, GenreThree)
VALUES ($title, $year, $logline, $synopsis, $mature, $type, $poster_tmp_name, '$g1', '$g2', '$g3')";
$result = $conn->query($sql) or die($mysqli->error);
$sql = "SELECT MovieID FROM Movie WHERE Title = $title AND Logline = $logline";
$result = $conn->query($sql) or die($mysqli->error);
$m_id = (mysqli_fetch_assoc($result)["MovieID"]);

$crew = $_POST['crew_field'];
$crew_roles = $_POST['crew_role'];

// $actors = $_POST['cast_field'];
// $characters = $_POST['role_field'];

for ($i = 0; $i < count($crew); $i++) {
$fname = strtok($crew[$i], " ");
$fullname = explode(' ', $crew[$i]);
array_shift($fullname);
$lname = implode(' ', $fullname);


$sql = "SELECT PersonID FROM People WHERE FirstName = '$fname' AND LastName = '$lname'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
$sql = "INSERT INTO People (FirstName, LastName)
VALUES ('$fname', '$lname')";
}
$result = $conn->query($sql);

$sql = "SELECT PersonID FROM People WHERE FirstName = '$fname' AND LastName = '$lname'";
$result = $conn->query($sql);
$p_id = (mysqli_fetch_assoc($result)["PersonID"]);
$curr_role = "'".$crew_roles[$i]."'";
echo ($curr_role);
echo ($m_id);
echo ($p_id);


$sql = "INSERT INTO WorksOn (MovieID, PersonID, `Role`)
VALUES ($m_id, $p_id, $curr_role)";
$result = $conn->query($sql) or die($mysqli->error);

}


$conn->close();

}

if (isset($_POST['submit'])){
// $title = $_POST["Title"];
// $year = $_POST["Year"];
// $type = $_POST["Type"];
// $genre = $_POST["genre"];
// $mature = $_POST["mature"];
// $logline = $_POST["logline"];
// $synopsis = $_POST["synopsis"];
// $poster_name = $_FILES ['poster']['name'];
// $poster_size = $_FILES ['poster']['size'];
// $poster_type = $_FILES ['poster']['type'];
// $poster_tmp_name = $_FILES ['poster']['tmp_name'];
// $producer = $_POST["producer_field"];
// $director = $_POST["director_field"];
// $writer = $_POST["writer_field"];
// $story = $_POST["story_field"];
// $cast = $_POST["cast_field"];
// $role = $_POST["role_field"];
// $composer = $_POST["composer_field"];
// $cin = $_POST["cin_field"];
// $editor = $_POST["editor_field"];
// $casting = $_POST["casting_director"];
// $prod_des = $_POST["production_designer"];
// $art = $_POST["art_direction"];
// $set = $_POST["set_deco"];
// $costume = $_POST["costume"];
// $hmua = $_POST["hmua_field"];

// $file = "submissions.txt";
insert();
$data = $_POST;
print_r($data);

}









?>

<?php include('../Footer/Footer.php') ?>
</body>

</html>

