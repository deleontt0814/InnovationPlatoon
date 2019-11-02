<?php 

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";

  
}

include 'dbconnection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $prep = $db->prepare ("INSERT INTO comments (name,unit,comment) VALUES (? ,?, ?)");
  
  $prep->bind_param('sss', $name, $unit, $comment);

  $name = $_POST['name'];
  $unit = $_POST['unit'];
  $comment = $_POST['comment'];

  $prep->execute();
  $result = $db->insert_id ;
  $prep->close();

  debug_to_console($name);
  debug_to_console($unit);
  debug_to_console($comment);

}
?>

<!DOCTYPE html>
<html>
<title>The Drone</title>
<?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  
<style><?php include '/Applications/MAMP/htdocs/Innovation/Homepage/homepagestyle.css'?></style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size: 16px;}
img {margin-bottom: -8px;}
.mySlides {display: none;}
</style>
<body class="w3-content w3-black" style="max-width:1500px;">

<?php include '/Applications/MAMP/htdocs/Innovation/Assets/menu.php';?>

<!-- Header with Slideshow -->
<header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Find Out More</button>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="../Images/RodAndDrone.png" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Changing the battlefield forever</h1>
        <hr class="w3-opacity">
        <p>Agile, quick, and quiet method to see our enemies when they least expect</p>
        <p><button class="w3-button w3-block w3-green w3-round" onclick="document.getElementById('download').style.display='block'">Find Out More</button></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="../Images/PooleBuildingDrone.png" alt="Image 2" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge w3-text-red"><b>Engineered for success</b> </h1>
        <hr class="w3-opacity">
        <p>Built to be strong and durable by our nations finest</p>
        <p><button class="w3-button w3-block w3-red w3-round" onclick="document.getElementById('download').style.display='block'">Find Out More</button></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="../Images/Drone3DModel.png" alt="Image 3" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Smart Design</h1>
        <hr class="w3-opacity">
        <p>Pushing the limits of todays military technology.</p>
        <p><button class="w3-button w3-block w3-indigo w3-round" onclick="document.getElementById('download').style.display='block'">Find Out More</button></p>
      </div>
    </div>
  </div>
  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour <i class="fa fa-angle-right"></i></a>
</header>

<!-- The App Section -->
<div class="w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>The Drone</b></h1>
      <h1 class="w3-xxxlarge w3-text-green"><b>The future of warfare</b></h1>
      <p><span class="w3-xlarge">Expand our capabilities on the battlefield</span> The drone is lightweight and compact, with a low profile, allowing our Marines to gather information
    on our enemies without exposing ourselves. Motion sensors on the drone provide us the ability to track movements and identify threats from above. </p>
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="../Images/DroneFlyingSky.png" alt="App" width="800" height="600">
    </div>
    </div>
    <div class="w3-col l4 m6">
      <img src="../Images/PooleDrone.png" class="w3-image w3-right w3-hide-small" width="335" height="471">
      <div class="w3-center w3-hide-large w3-hide-medium">
        <button class="w3-button w3-block w3-padding-large" onclick="document.getElementById('download').style.display='block'">
          <i class="fa fa-download"></i> Download Application
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<form id="phpbasics" name="phpbasics" action=<?php echo $_SERVER['PHP_SELF'];?> method="post" enctype="multipart/form-data">
<div id="download" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('download').style.display='none'" class="fa fa-remove w3-xlarge w3-button w3-transparent w3-right w3-xlarge"></i>
      <h2 class="w3-wide">Want to learn more?</h2>
      <p>Contact us if you think you have what it takes</p>     
      <p><input for="name" name="name" type="text" class="w3-input w3-padding-16 w3-border"placeholder="Name and Rank" required ></p>
        
        <p><input for="unit" name="unit" type="text" class="w3-input w3-padding-16 w3-border"  placeholder="Unit" required></p>
        
        <!-- <p><input for="comment" name="comment" class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required
             value="2017-11-16T20:00"></p> -->
        
        <p><input for="comment" name="comment" class="w3-input w3-padding-16 w3-border" type="text" placeholder="Leave us a message"
            required></p>
        
        <p><button name="execute" id="execute" class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
     
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-grey">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="../Images/RodAndComputer2.png" alt="App" width="435" height="571">
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Clarity</b></h1>
      <h1 class="w3-xxxlarge w3-text-red"><b>Beyond the fog of War</b></h1>
      <p><span class="w3-xlarge">Motion Sensor Camera</span> Adding clarity to todays conflicts, the drone comes equipped with two cameras. 
    One camera facing the front primarily used by the controllers for piloting the device. A second camera is located in the underbelly of the drone equipped with a 
  motion sensor, allowing our Marines to see beyond the human eye.</p>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="w3-container w3-padding-64 w3-dark-grey w3-center">
  <h1 class="w3-jumbo"><b>Features</b></h1>
  <p>More than the average device.</p>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-bolt w3-text-orange w3-jumbo"></i>
      <p>Fast</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-heart w3-text-red w3-jumbo"></i>
      <p>Loved</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-camera w3-text-yellow w3-jumbo"></i>
      <p>Clarity</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-battery-full w3-text-green w3-jumbo"></i>
      <p>Power</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-diamond w3-text-white w3-jumbo"></i>
      <p>Sharp</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-cloud w3-text-blue w3-jumbo"></i>
      <p>Cloud</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-globe w3-text-amber w3-jumbo"></i>
      <p>Global</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-hdd-o w3-text-cyan w3-jumbo"></i>
      <p>Storage</p>
    </div>
  </div>
  
  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="fa fa-user w3-text-sand w3-jumbo"></i>
      <p>Safe</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-shield w3-text-orange w3-jumbo"></i>
      <p>Stabile</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-wifi w3-text-grey w3-jumbo"></i>
      <p>Connected</p>
    </div>
    <div class="w3-col s3">
      <i class="fa fa-image w3-text-pink w3-jumbo"></i>
      <p>HD</p>
    </div>
  </div>
</div>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>
</html>
