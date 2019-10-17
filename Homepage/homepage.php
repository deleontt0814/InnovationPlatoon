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

<head>
  
<?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  
<style><?php include '/Applications/MAMP/htdocs/Innovation/Homepage/homepagestyle.css'?></style>
<title>Innovation Plt | CLB-453</title>
</head>

<body>
  <!-- Banner -->
  <div class="hero-image">
    <div class="hero-text">
      <h1>CLB-453</h1> <!-- Header-->
      <h2>Innovation Plt.</h2>
      <p>Engineering the future of the Marine Corps</p>
    </div>
  </div>
  <!-- Banner End -->

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/menu.php';?>

  <!-- About Container -->
  <div class="w3-container" id="about">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">OUR MISSION</span></h5>
      <p>Located out of San Jose, CA, Combat Logistics Battalion 453 drafted an elite group of Marines capable 
        of solving modern day problems with solutions of the future.</p>
      <p>In addition to training and maintaining the high standards of the Marine Corps, 
        Innovation Platoon, CLB-453 works on designing and engineering new technology to be suuplement our capabilities at homepage 
        and increase our lethality overseas.</p>
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p><i>"We come from different backgrounds, and we use these backgrounds to build the future of the Marine Corps"</i></p>
        <p>- Sgt. Rodriguez, Innovation Platoon Sergeant</p>
      </div>
      <iframe style="width:100%;max-width:1000px; height: 420px;" src="https://youtube.com/embed/LLj5r3eoy_M" 
        class="w3-margin-top"></iframe>
      <p><strong>Unit:</strong> Combat Logistics Battalion 453, 4th Marine Division</p>
      <p><strong>Address:</strong> 901 E Mission Street, San Jose, CA 95112</p>
    </div>
  </div>

  <!-- Contact/Area Container -->
  <form id="phpbasics" name="phpbasics" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">QUESTIONS?</span></h5>

      <p><strong>Curious</strong> about joining our team or what we do, send us a message:</p>
      <form action="/action_page.php" target="_blank">

        <p><input for="name" name="name" type="text" class="w3-input w3-padding-16 w3-border"placeholder="Name and Rank"  ></p>
        
        <p><input for="unit" name="unit" type="text" class="w3-input w3-padding-16 w3-border"  placeholder="Unit" ></p>
        
        <!-- <p><input for="comment" name="comment" class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required
             value="2017-11-16T20:00"></p> -->
        
        <p><input for="comment" name="comment" class="w3-input w3-padding-16 w3-border" type="text" placeholder="Leave us a message"
            required></p>

            <!-- XSS: <IMG SRC=# onmouseover="alert('xxs')"> -->

        
        <p><button name="execute" id="execute" class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>
  <!-- End page content -->
  </div>

  </form>

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>

</html>