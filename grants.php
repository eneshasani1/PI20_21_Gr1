<!DOCTYPE html>
<html>

<head>
  <title>Grants</title>
  <link rel="shortcut icon" type="image/png" href="images/3d.png">
  <link rel="stylesheet" href="navigation.css">
  <link rel="stylesheet" href="grants.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/3d.png">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="Products/jquery-3.5.1.js"></script>
  <script src="i_g_l_validation.js"></script>
  <script>
    $(document).ready(function() {
      $("button").click(function() {
        $("#div1").fadeIn("slow");
        $("#div2").fadeIn(2000);
        $("#div3").fadeIn(2500);
        $("#div4").fadeIn(2000);
        $("#div5").fadeIn("slow");
      });
    });
  </script>
</head>

<body>
  <?php
  require('homepage_header.php');
  ?>
  <main>
    <div class="box1">
      <div class="content">
        <h1 data-text="Grants">Grants</h1>
        <p style="font-size: 23px">
          The BPA works with different organizations to provide grants for small businesses. Find out if you meet the requirements to apply.
        </p>
      </div>
      <button class="open-button" onclick="openForm()">Find Grants</button>

      <div class="form-popup" id="myForm">
        <form method="post" method="myform"  class="form-container">
          <h1>Please complete the form below </h1>
          <label for="name"><b>Name</b></label>
          <input type="text" id="name" placeholder="Enter Name" name="name" required>
          <label for="surname"><b>Surname</b></label>
          <input type="text" id="surname" placeholder="Enter Surname" name="surname" required>
          <label for="email"><b>Email</b></label>
          <input type="text" id="email" placeholder="Enter Email" name="email" required>
          <label for="phone"><b>Number</b></label>
          <input type="tel" id="phone" name="phone" placeholder="383-45-678-234">
          </br>
          <label for="subject"><b>What Are Your Future Goals?</b></label>
          <textarea id="subject" name="subject" placeholder="Enter text here.." style="width:100%;height:80px"></textarea>



          <button type="submit" name="save" class="btn" onclick="return validation()">Submit</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
      <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
      </script>
      <div class="photo">
        <img src="images/couple.jpg">

      </div>
    </div>
    <div class="box4">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="rgb(196, 190, 190)" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,165.3C840,128,960,64,1080,58.7C1200,53,1320,107,1380,133.3L1440,160L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path>
      </svg>
    </div>
    <div class="box2">
      <div class="content1">
        <h2>Grants for your business</h2>
        <p>The grants we give are provided by foundations, individuals or non-governmental organizations for the sole purpose of funding local promising projects.

          Winning a grant has the potential to transform your organization’s capacity to complete its mission.

          In order to receive one, submitting a proposal to the funder and fulfilling an application are required.
        </p>
      </div>
    </div>
    <div class="box3">
      <img src="images/girls.jpg" id="scream" alt="scream">
      <canvas id="myCanvas" width="600" height="690" style="border:5px solid #f3ba85;">
        Your browser does not support the HTML5 canvas tag.
      </canvas>

      <script>
        window.onload = function() {
          var canvas = document.getElementById("myCanvas");
          var ctx = canvas.getContext("2d");
          var img = document.getElementById("scream");
          ctx.drawImage(img, 20, 30);

        };
      </script>
    </div>
    <div class="box5">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 317">
        <path fill="rgb(196, 190, 190)" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,197.3C480,213,600,203,720,165.3C840,128,960,64,1080,58.7C1200,53,1320,107,1380,133.3L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
      </svg>
    </div>
    <div class="box7">
      <h3>Who get grants?</h3>
      <p>
        Competition for grants is high – everybody wants free financing. You’ll see a lot of them are for non-profits, but keep looking, there are plenty for businesses too.

        Small business grants tend to be aimed at certain regions or sectors, specific types of businesses or causes, or particular community groups.
      </p>
      <button style="font-size: 15px;">Click to see categories</button><br><br>
      <div class="warpper">
        <div id="div1" style="width:250px;height:250px;display:none;background-color:#fff">
          <h2>Veterans</h2>
          <img src="images/star.png" width="200px" height="170px">
        </div><br>
        <div id="div2" style="width:250px;height:250px;display:none;background-color:#fff;">
          <h2>Women</h2>
          <img src="images/women1.png" width="170px" height="170px">
        </div><br>
        <div id="div3" style="width:250px;height:250px;display:none;background-color:#fff">
          <h2>Minorities</h2>
          <img src="images/pie.png" width="170px" height="170px">
        </div><br>
        <div id="div4" style="width:250px;height:250px;display:none;background-color:#fff;">
          <h2>Causes</h2>
          <img src="images/danger.png" width="170px" height="170px">
        </div><br>
        <div id="div5" style="width:250px;height:250px;display:none;background-color:#fff">
          <h2>StartUps</h2>
          <img src="images/spaceship.png" width="180px" height="170px">
        </div>

      </div>
    </div>

    <div class="box8">
      <p>Funders look carefully at the applicant organization’s history, leadership and track record. Offer factual and objective descriptions of your organization’s accomplishments, including statistics and examples. Highlight achievements that will be most meaningful to the potential funder. “Season” your proposal with a quote from someone in the community who values the contributions of your organization. If your organization is new and its track record brief, look to the background of the staff and board of directors to provide credibility, and stress community partnerships to build the funder’s confidence in the new organization’s ability to achieve results.</p>
      <a href="tips.pdf" target="_blank">Some tips</a>
    </div>
  </main>
  <footer>
    <div class="footer-container">
      <div class="left-col">
        <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">B</span>USINESS</span>
        <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">P</span>ROMOTIONS</span>
        <span style="font-size:29px;color:#ffff;background:#333;border-bottom:7px solid #d88e2c ;"><span style="color:#F79B44">A</span>GENCY</span>
        <div class="social-media">
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebool-f"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <p class="rights-text">&#169 Copyright 2021 Created By BPA All Rights Reserved</p>
      </div>
      <div class="right-col">
        <h1>Contact Us</h1>
        <div class="border"></div>
        <p>For any question contact us.</p>
        <div class="contact">
          <i class="fa fa-phone" style="color: #333;font-size:23px; "><span style="font-size:16px;">+38344111222</span></i>
          <i class="fa fa-envelope" style="color: #333;font-size:23px; "><a href="mailto:valeza.grainca@student.uni-pr.edu"><span style="font-size:16px;">Send Mail</span></a></i>
        </div>
      </div>
    </div>
  </footer>


</body>
<?php
include_once 'admins/database.php';
// If the user is not logged in redirect to the login page...

if (isset($_POST['save'])) {
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $sql = "INSERT INTO grantsform (name,surname,email,phone,subject)
                VALUES ('$name','$surname','$email','$phone','$subject')";
  if (mysqli_query($con, $sql)) {
    echo "Error: " . $sql . "
            " . mysqli_error($con);
  }
  mysqli_close($con);
  echo "<script>alert('Successfully Added!!!'); window.location='./grants.php'</script>";
}
?>

</html>