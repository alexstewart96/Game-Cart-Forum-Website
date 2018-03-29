
<?php
include('config.php');
$info = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
// username and password sent from form

$myusername = mysqli_real_escape_string($conn,$_POST["txtUsername"]);
$mypassword = mysqli_real_escape_string($conn,$_POST["txtPassword"]);
$myemail = mysqli_real_escape_string($conn,$_POST["txtEmail"]);



$sql = "INSERT INTO users (Username, Password, Email)
VALUES ('$myusername', '$mypassword', '$myemail')";

    if(mysqli_query($conn, $sql)){
        $info = "User Created Successfully";
        
            
    }
}


?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        
        <link href="css/mystyle.css" type="text/css" rel="stylesheet"/>
        
        <!--imported google font 8 bit-->
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <header>
 <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="magnavox.html">TheFirstConsole</a></li>
            <li class="divider"></li>
            <li><a href="atari2600.html">Atari2600 the big beginning</a></li>
            <li class="divider"></li>
            <li><a href="nes.html">NES the revolutionary console</a></li>
            <li class="divider"></li>
            <li> <a href="snesvmega.html">Snes vs MegaDrive the first big console battle</a></li>
            <li class="divider"></li>
            <li> <a href="n64vpsone.html">N64 vs PSone cartridge vs disc</a></li>
            <li class="divider"></li>
            <li> <a href="xboxvgamecubevps2.html">Xbox gamecube and PS2 the begining of the modern era</a></li>
        </ul>

   <ul id="dropdown2" class="dropdown-content">
        <li><a href="index.html">Home</a></li>
               <li class="divider"></li>      
                    <li><a href="about.html">About</a></li>
                     <li class="divider"></li>
                    <li><a href="advice.html">Advice</a></li>
                     <li class="divider"></li>
                    <li> <a href="events.html">Events</a></li>
                     <li class="divider"></li>
       <li> <a href="login.html">Login</a></li>
    </ul>
        <!--nav bar START-->
         <div class="navbar-fixed">
             <nav  class="nav-extended">
            
               <div class="container">
            <div class="nav-wrapper">
              
             <!-- <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form> -->
              
                <a href="#!" class="brand-logo center"> <div style="font-family: 'VT323', serif;">GameCart</a></div>
                
                <a class="dropdown-button" href="index.html" data-activates="dropdown2">MainPages<i class="material-icons left"> arrow_drop_down</i></a>
                <ul class="right">
               <a class="dropdown-button" href="#!" data-activates="dropdown1">Consoles<i class="material-icons right"> arrow_drop_down</i></a>
                </ul>
                  
           
              </div>
                  </div>
            
        </nav>
    </div>
     </header>
        
        <a class="waves-effect waves-light btn">button</a>
        
        <main>
        
        <div class="container">
    <div class="row">
        <div class="col-lg-9">
        <div class=" panel panel-default">
            <div class="panel-body">
            <!--panel header-->
             <div class="page-header">
                 <h3>Connection types<small>how to connect your consoles the best way to your tv</small></h3>
                </div>
                <!--page image-->
  <img src="assets/nes.JPG" class="featureImg" width="100%;height:200px;"/>
                
                <div class="row">
                <div class="col-lg-1"> </div>
                     <div class="col-lg-10">
                         <h3>Signup</h3>
                       <p>click Signup once details are entered</p>
                       
                       <div class="row">
<!--Sign Up Form-->                         
                         <form class="col s12" method="post" accept-charset='UTF-8'>
      <div class="row">
        <div class="input-field col s6">
          <input name="txtUsername" type="text" class="validate">
          <label for="txtUsername">UserName<i class="material-icons">account_circle</i></label>
        </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
          <input name="txtPassword" type="password" class="validate">
          <label for="txtPassword">Password<i class="material-icons">lock_outline</i></label>
        </div>
      </div>
        
         <div class="row">
        <div class="input-field col s12">
          <input name="txtEmail" type="email" class="validate">
          <label for="txtEmail">Email<i class="material-icons">email</i></label>
        </div>
      </div>
        <button  type="submit" name="submit" value="Post Form">Signup</button>
                               <h2><a href="login.php">once created login</a></h2>
          </form>
                           <?php echo($info);?>
          </div>
          
                       
                         <h3>RF.</h3>
                <p>RF (radio frequency) was used in the early days before composite became standard.</p>
                         
             <img src="assets/rf.JPG"   style="width:200px;height:200px;" class="rotate90"/>
                          
                         
    <a href="snesvmega.html" class="btn btn-warning" role="button">snes page</a>
                    </div>
                    <div class="col-lg-1"> </div> 
                    </div>
                </div>
            </div>
        </div>
               </div></div> 
        </main>
        
        
        
      <!--nav bar END-->
       <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
<div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
         
      <!--  $( document ).ready(function(){
          $(".button-collapse").sideNav();
          })-->
    </body>
  </html>
