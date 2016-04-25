<?php

if (isset($_POST['submit'])){
    
    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $privatekey = "6LemTx4TAAAAAOliRACvjrLsHODR6ACExq2Uan7F";
    
    $response = file-get-contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDRE']);
    
    $data = json_decode($response);
    
    if(isset($data->succses) AND $data->succses==true){
        
        header('Location: contact.php?CaptchaPass=True');
        
    }else
    
        header('Location: contact.php?CaptchaFail=True');
}



?>







<!DOCTYPE html>

<html lang="en">
    <head>
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio Website for Joe Parkes">
        <meta name="keywords" content="joeparkes, joe, parkes, coventry">
        <meta name="author" content="Joe Parkes">
        <meta http-equiv="Cache-Control" content="max-age=200" />
        
        <!-- Links / CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="CSS/Website.CSS" />
        <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>  
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
       
       
        <!-- Javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://raw.githubusercontent.com/philipwalton/polyfill/master/dist/polyfill.min.js"></script>
        <script src="gen_validatorv4.js" type="text/javascript"></script>
        <script src="site.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        
       
        
        <title> Joe Parkes </title>

    </head>

<body>


    <div class="btn-group", id="header">
   
   <button id="menubutton" style="position:absolute; left:10px; top:10px;" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      Menu 
      <span class="caret"></span>
   </button>
   
   <ul class="dropdown-menu" role = "menu">
      <li><a href="home.html">Home</a></li>
      <li><a id="Block" href = "about.html">About</a></li>
      <li><a target="_blank" , href="CV2015(Update).pdf"> CV </a></li>
      <li><a class="disabled" href="contact.html">Contact</a></li>
      
      <li class="divider"></li>
      <li><a target="_blank", href="https://server145.web-hosting.com:2083">Admin</a></li>
      <li><a onclick="return confirm('All content on joeparkes.com is my own, please DO NOT use any content on the sitewithout contacting me beforehand.');" id="pointer"> Disclaimer </a></li>
   
   </ul>
   
       <a href="index.html" class="ptext"> Joe Parkes | Portfolio </a>
   </div>
   
        <div>
     <a href="home.html">
        <img src="Images/LogoFinal.png" id="imglogo" class="displayedcenter" alt="image"height="550" width="550"></a>
        
       
   </div>
    
    
    
    
    
   <form action="MAILTO:joeparkes@hotmail.com" method="post" id="myform" enctype="multipart/form-data"
  name="Form Data">
       
       <?php if(isset($_GET['CaptchaPass'])) ?>
       <center><div class="FormElement" > Message Sent</div></center>
       <?php } ?>
      
      <?php if(isset($_GET['CaptchaFail'])) ?> 
       <center><div class="FormElement" > Form Failed, please try again!</div></center>
       <?php } ?>
       
       <fieldset class="form-group">
    <label class="control-label" for="inputWarning"></label>
    <label class="control-label" for="inputSuccess"></label>
    <label for="name">Name *</label>
    <input type="name" name="name" class="form-control" id="name" placeholder="e.g Joe Parkes" required >
    
    
  </fieldset>
  
  <fieldset class="form-group">
    <label class="control-label" for="inputWarning"></label>
    <label class="control-label" for="inputSuccess"></label>
    <label for="name">Website URL </label>
    <input type="website" name="name" class="form-control" id="name" placeholder="e.g www.joeparkes.com"  >
    
    
  </fieldset>
       
  <fieldset class="form-group">
    <label class="control-label" for="inputWarning"></label>
    <label class="control-label" for="inputSuccess"></label>
    <label for="email1">Email Address *</label>
    <input type="email" name="email" class="form-control" id="email1" placeholder="e.g joeparkes@hotmail.com" required >
    <center>
        <small class="text-muted">We'll never share your email with anyone else.</small>
    </center>
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect1">Message Subject *</label>
    <select class="form-control" name="drop" id="exampleSelect1" required >
      <option value="" disabled selected >Select your option</option>
      <option>Personal Message</option>
      <option>Website Problems</option>
      <option>Business Enquiry</option>
      <option>Content Form</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleTextarea"> Message *</label>
    <textarea class="form-control" name="message" id="exampleTextarea" placeholder="Your Message" minlength="1" maxlength="700" rows="3" required ></textarea>
  </fieldset>
 
 <center> 
 <div class="g-recaptcha" data-sitekey="6LemTx4TAAAAABw7U-cFJXpm1A1MlF07bZj5-Wl_"></div>
 </center>
 
 <br> </br>
 
 <center>
  <button type="submit" name="submit" class="btn btn-primary btn1" value="Submit">Send</button>   
 </center>
  
  
</form>



</body>



</html>