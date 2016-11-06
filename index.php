<?php
  session_start();
  if (isset($_POST["signin"])){
    if (isset($_SESSION["count"]) ){
      $_SESSION["count"] +=1;
    }
    else{
      $_SESSION["count"] =1;
    }
    if($_SESSION["count"]>2){
      $_SESSION["message"] = "Hi, ". $_POST["who"]." It is the third time you coming to my page. I think you must like it. Why don't you email me your real name? :)";
      unset($_SESSION["count"]);
      header('Location:message.php');
      return;
    }

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width" initial-scale="1">
  <title>MY Home Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/jquery.hiSlider.min.css">
  <link rel="stylesheet" type="text/css" href="css/css.css"/>
  <style type="text/css">
  body{
    background-image: url("images/bg3.jpg");
    background-size: 100%;
    background-attachment: fixed;
    margin: 0;
  }
  </style>
</head>

<body>
  <header>
    <h1 class="super-heading index-heading">Muhan Yuan</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xs-6 home-image">
          <img class="img-responsive img-circle"  src="images/image1.jpeg" alt="my photot">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <ul class="nav nav-justified nav-ul">
          <li><a class="nav-li cur-page" href="./index.html">Home</a></li>
          <li><a class="nav-li" href="./photo.html">Photo</a></li>
          <li><a class="nav-li" href="./experience.html">Experience</a></li>
          <li><a class="nav-li" href="./skill.html">Skills</a></li>
          <li><a class="nav-li" href="./about.html">About</a></li>
        </ul>
      </div>
    </div>

  </header>

    <div class="index-content">
        <div class="wel">
          <p class="welcome" id="wel1">
            Hello</br> My name is Muhan Yuan.</br>I am from UMSI.</br>Welcome to MY page.
          </p>
          <p class="welcome" id="wel-q">What is your name:</p>
          <form class="form-name" method="post">
            <input type="text" size="20" id="name" name="who" onsubmit="welcome()">
            <input type="submit" value="Sign in" name="signin" class="button">
          </form>
        </div>
    </div>


    <div class="top">
      <a href="#top">back to top</a>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 social">
            <div class="face col-lg-3 col-md-3 col-xs-6">
              <a href="https://www.facebook.com/profile.php?id=100011871866185"><img class="img-responsive" src="images/face.png"></a>
            </div>
            <div href="" class="twitter col-lg-3 col-md-3 col-xs-6">
              <a href=""><img class="img-responsive" src="images/twitter.png"></a>
            </div>
            <div href="" class="instagram col-lg-3 col-md-3 col-xs-6">
              <a href="https://www.instagram.com/sasasamoyed/?hl=en"><img class="img-responsive" src="images/inst.png"></a>
            </div>
            <div href="" class="email col-lg-3 col-md-3 col-xs-6">
              <a href="mailto:yuanmh@umich.edu"><img class="img-responsive" src="images/email.png"></a>
            </div>
          </div>
          <div class="col-lg-6 copyright">
            <p >
              © 2016 UMSI MUHAN YUAN. All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="js/jquery.1.9.1.js"></script>
    <script src="js/jquery.hiSlider.min.js"></script>
    <script>
      function welcome(){
        document.getElementById("wel1").innerHTML = "Hello, "+ document.getElementById("name").value + "</br>It is so nice to meet you.</br> My name is Muhan Yuan.</br>I am from UMSI.</br>Welcome to MY page.";
        document.getElementById("wel-q").style.display="none";
        document.getElementById("name").style.display ="none";
      }

    	$('.SliderPok').hiSlider({
    		isFlexible: true,
    		isSupportTouch: true,
    		titleAttr: function(curIdx){
    			return $('img', this).attr('alt');
    		}
    	});
    </script>

</body>
</html>
