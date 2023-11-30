<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>

<html lang="">
<head>
<title>KIRTHAS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style>
 p{
   color:black;
 }
 @keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; repeat;}
div#slider figure { 
  position: relative;
  width: 500%;

  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 20s slidy infinite; 
}


</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">KIRTHAS</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="index2.php">Home</a></li>
        <li class=""><a href="Article.php">Article</a></li>
        <li class =""><a href="../pages/gallary.php">Gallery</a></li>
        <li class=""><a href="../pages/aboutus.php">AboutUs</a></li>
        <li class=""><a href="../pages/contactus.php">Contact</a></li>
        <li><a class="drop" href="">SIGNIN</a>
          <ul>
            <li><?php if (isset($_SESSION['username'])) : ?>
    <a href="../index.php?logout='1'" style="color: red;">logout</a> 
    <?php endif ?></a>
    
          </li>
          
            
      
           
          </ul>

     
       
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
</div>
<!-- ################################################################################################ -->



<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" >
<div id="slider">
<figure>
<img src="../images/demo/backgrounds/1z.jpeg" alt>
<img src="../images/demo/backgrounds/2z.png" alt>
<img src="../images/demo/backgrounds/3z.jpeg" alt>
<img src="../images/demo/backgrounds/4z.jpeg" alt>
<img src="../images/demo/backgrounds/5z.jpeg" alt>



</figure>
</div>
</div>
</div>
</div>


<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<div class="wrapper row4">

      
           
           
           
       
  
  
      <iframe width="1440" height="900" src="https://www.youtube.com/embed/GwkWE1NvPrw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


        </li>
        
      <br>
        <br>
        <br>
        <br>
        </div>
        </div>
<!-- ################################################################################################ -->

<div class="wrapper row4">
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/5.jpg');">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
  
    <ul class="nospace group services">
      <li class="one_third first" style="background-color:gray;">
        <article class="infobox">
     
          <h6 class="heading"><i class="fa fa-joomla" ></i> <a href="../pages/map.php">LOCATE YOUR..</a></h6>
          <div class="icon" style="background-color=black;"></div>
          <p> Find your location, to guide you help get more information.  
          [&hellip;]</p>
        </article>
      </li>
      <li class="one_third">
        <article class="infobox">
     
          <h6 class="heading"><i class="fa fa-key"></i> <a href="../pages/stationary.php">STATIONARY</a></h6>
          <p>Look in-depth about information of the specific location.  </p>
        </article>
      </li>
      <li class="one_third"  style="background-color:gray;">
        <article class="infobox" >
          <h6 class="heading" ><i class="fa fa-balance-scale"></i> <a href="../pages/gall.php">ROUTE</a></h6>
          <p>Relate the categorized data thought out the path. 
  [&hellip;]</p>
        </article>
      </li>
      <li class="one_third first">
        <article class="infobox">
       
          <h6 class="heading"><i class="fa fa-balance-scale"></i> <a href="../pages/make.php">MakeYourMap</a></h6>
          <p> Login to create your possibility on our interface  
          [&hellip;]</p>
        </article>
      </li>
      <li class="one_third">
        <article class="infobox">
          <h6 class="heading"><i class="fa fa-balance-scale"></i> <a href="../pages/shareus.php">ShareUS</a></h6>
          <p>Share and response your data to strength the webpage.
          [&hellip;]</p>
        </article>
      </li>
      <li class="one_third">
        <article class="infobox">
          <h6 class="heading"><i class="fa fa-balance-scale"></i> <a href="../pages/maploc.php">Map Location</a></h6>
          <p>a particular place or position: the property is set in 
          [&hellip;]</p>
        </article>
      </li>
      
      
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
   
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="https://www.facebook.com/kirthas.kirthas.7"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="https://twitter.com/kirthas2"><i class="fa fa-twitter"></i></a></li>
    
      <li><a class="faicon-google-plus" href="https://www.instagram.com/kirthas12/"><i class="fa fa-google-plus"></i></a></li>
     
    </ul>
    <nav>
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Cookies</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">KIRTHAS</a></p>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>