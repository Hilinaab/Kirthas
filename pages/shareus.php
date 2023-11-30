<html lang="">
        <head>
        <title>KIRTHAS</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
       <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../layout/styles/util.css">
	<link rel="stylesheet" type="text/css" href="../layout/styles/main.css">
    <link href="../assets/css/lowsig.css" rel="stylesheet" type="text/css" media="all" />
        <!--===============================================================================================-->
<style>
 body{
    background-image:  url("../images/demo/backgrounds/ty.jpg");
}

input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}

input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type=submit]:hover {
background-color: #45a049;
}

.container {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
}
</style>
        </head>

        <body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../pages/index2.php">KIRTHAS</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
    <ul class="clear">
    <li class=""><a href="../pages/index2.php">Home</a></li>
    <li class=""><a href="Article.php">Article</a></li>
    <li class =""><a href="../pages/gallary.php">Gallery</a>
    <li class=""><a href="../pages/aboutus.php">AboutUs</a></li>
    <li class="active"><a href="../pages/contactus.php">Contact</a></li>
    
  
       
      </ul>
          </nav>

</div>
    <!-- ################################################################################################ -->
  </header>
</div>
<body>

<div class="main">
<div class="main-w3l" <?php if(isset($comments)) { echo $comments; } ?>>

	

	<div class="w3layouts-main">
		<h2><span>ShareUs</span></h2>
<form name="contact-form" action="" method="post" id="contact-form" required>
<label for="fname">First Name</label>
<input type="text" id="fname"class="form-control" name="your_name" placeholder="Your name.."required>

<label for="email">Email</label>
<input type="text" id="email" class="form-control" name="your_email" placeholder="email@yahoo.com."required>
<div class="form-group">
<label for="country">Country</label>
<select id="country" name="country">
<option value="australia">Ethiopia</option>
<option value="canada">Kenya</option>
<option value="usa">France</option>
<option value="australia">Nigeria</option>
<option value="canada">USA</option>
<option value="usa">Uganda</option>
<option value="australia">Egypt</option>
<option value="canada">Libya</option>
<option value="usa">Tanzania</option>
</select>
</div>
<form action="upload.php" method="post" enctype="multipart/form-data">
Select file :<input type="file" name="fileToUpload" id="fileToUpload">
<div class="form-group">
<label for="subject">Subject</label>
<textarea id="subject" name="comments" placeholder="Write something.." style="height:200px"></textarea>
</div>
<input type="submit" value="submit" name="submit" id="submit_form">
</form>
</div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>





