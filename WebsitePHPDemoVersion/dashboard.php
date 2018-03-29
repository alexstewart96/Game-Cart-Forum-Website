<?php
include('session.php');
    
$sql = "SELECT userID, username, password, firstname, lastname, email FROM users WHERE userID = '$_SESSION[login_user]'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
mysqli_close($conn);
?>

<html>
<head>
<title>Welcome </title>
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
              
                <a href="#!" class="brand-logo center"> <div style="font-family: 'VT323', serif;">GameCart</div></a>
                
                <a class="dropdown-button" href="index.html" data-activates="dropdown2">MainPages<i class="material-icons left"> arrow_drop_down</i></a>
                <ul class="right">
               <a class="dropdown-button" href="#!" data-activates="dropdown1">Consoles<i class="material-icons right"> arrow_drop_down</i></a>
                </ul>
                  
           
              </div>
                  </div>
            
        </nav>
    </div>
     </header>
    
    <!--php part 2-->
<h1>Welcome <?php echo $row["firstname"]; ?></h1>
<?php echo "Username: " . $row["username"] . "</br>"?>
<?php echo "Firstname: " . $row["firstname"] . "</br>"?>
<?php echo "Lastname: " . $row["lastname"] . "</br>"?>
<?php echo "Email: " . $row["email"] . "</br>"?>
<h2><a href="update.php">Update Details</a></h2>
<h2><a href = "login.php">Sign Out</a></h2>
    <h2><a href="forum.php">Forums</a></h2>
    
    
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