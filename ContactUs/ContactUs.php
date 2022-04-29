<!DOCTYPE html>

<html lang="en">

<head>
   <title>ShortForm: Contact Us</title>
   <meta charset="UTF-8">
   <meta name="ContactUs" content="Contact">
   <meta name="Miu Nakata" content="Contact">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel = "stylesheet" type = "text/css" href = "ContactUs.css"/>

</head> 

<body>
    
  <?php include("../Header/Header.php") ?>  
  <h3>Contact Us</h3>

  <p id = "about"> 
    Shortform is a project by Aram, Alyssa, Miu and Sebastian, students at UT Austin. <br>
    <b>Aram</b> is a third year Radio-Television-Film major who has experience in film production, set assistance and as a director of photography. <br>
    <b>Alyssa</b> is a third year Informatics major with a background in computer science and front-end development who has worked with the local arts community, especially in radio at KVRX. <br>
    <b>Miu</b> is a second year Radio-Television-Film major, a hair and makeup artist and an award winning filmmaker at SXSW, Slay Horror Film Festival and more. <br>
    <b>Sebastian</b> is a a third year Informatics major with a background in computer science, data science and full-stack development. <br>
  </p>
  
  <h1><br>Our Email: <br>
    <a href="mailto:abaali@utexas.edu"><i>Aram Baali</i></a><br>
    <a href="mailto:nakatmiu@utexas.edu"><i>Miu Nakata</i></a><br>
    <a href="mailto:alyssalin@utexas.edu"><i>Alyssa Lin</i></a><br>
    <a href="mailto:sebastiangranhold@utexas.edu"><i>Sebastian Granhold</i></a><br>
  </h1>

  <div id="contact-form">
    <form method="post"> 
      <table>
      <tr>
        <td><label> Your Name: </td>
        <td><input name = "name" type = "text" size = "30" id="inputs" require/> </label></td>
      </tr>
      <tr>
        <td><label> Email Address: </td>
        <td><input name = "email" type = "email" size = "30" id="inputs" require/> </label></td>
      </tr>
      <tr>
        <td><label> Phone Number: </td>
        <td><input name = "phone" type = "text" size = "30" id="inputs" require/> </label></td>
      </tr>

      </table>

        <p style="text-align: center;"> Additional Comments: <br /> </p>
        <textarea name = "comments" rows = "4" cols = "36"> Enter your comments here: </textarea>

      <p>
        <input name = "submit" type = "submit" value = "Enter" />
        <input type = "reset" value = "Reset" />
      </p>
      
    </form>

    <script defer>
      $('#contact-form').submit(function () {
        return false;
      });
      document.querySelector('#contact-form').addEventListener('submit', (e) => {
        const data = Object.fromEntries(new FormData(e.target).entries());
        console.log(data)
        console.log(data['email'])
      
      });
    </script>
  </div>
  <h1><br>
    <a href="../Homepage/Body.php"><i>Homepage</i></a></h1>
    
    <?php include("../Footer/Footer.php") ?>
</body>
</html>