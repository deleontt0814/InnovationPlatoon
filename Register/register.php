<?php 

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);

  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

include 'dbconnection.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $prep = $db->prepare ("INSERT INTO usernames (userid,firstname,lastname,email,password) VALUES ('0', ?, ? ,?, ?)");
  
  $prep->bind_param('ssss', $firstname, $lastname, $email, $password);

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $prep->execute();
  $result = $db->insert_id ;
  $prep->close();

  debug_to_console($firstname);

}
?>

<!DOCTYPE html>
<html>

<head>
<?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  

    <title>Join Our Team!</title> <!-- title on webpage tab-->
    <style><?php include "/Applications/MAMP/htdocs/Innovation/Register/register.css"?></style>
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

    <!-- Register -->
    <form id="phpbasics" name="phpbasics" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="firstname"><b>First Name</b></label>
            <input id="firstname" name="firstname" type="text" placeholder="Enter First Name" required size=25>

            <label for="lastname"><b>Last Name</b></label>
            <input id="lastname" name="lastname" type="text" placeholder="Enter Last Name" required size=25>

            <label for="email"><b>Email Address</b></label>
            <input id="email" name="email" type="text" placeholder="Enter Email Address" required size=25>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Enter Password" required size=25>

            <hr>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <button type="submit" name="execute" id="execute" class="registerbtn">Register</button>
        
            <span style="font-weight: bold;">Result</span>:<br>
            <div id="resultbox">
 
            <?php if (isset($_POST['execute'])){
 
            echo $result ;
 
            }  ?>
 
            </div>
          </div>

        


        <!-- <span style -->

        <div class="container signin">
            <p>Already have an account? <a href="#" onclick="document.getElementById('id01').style.display='block'">Sign
                    in</a>.</p>
        </div>
    </form>
   

    <!-- Register End -->

    <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>


</body>