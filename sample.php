<?php
 
include 'dbconnection.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
// sql   structured query language
    $prep = $db->prepare("INSERT INTO friends (friendid,firstname,lastname,city,email) VALUES ('0',?,?,?,?)");
    //Now, you can bind some parameters.
    //  Character i=integer, d=double, s=string, b=blob
 
    $prep->bind_param('ssss',$firstname,$lastname,$city,$email);
 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $city = $_POST['city'];
    $email = $_POST['email'];
 
 
    $prep->execute();
    $result = $db->insert_id ;
    $prep->close();
 
 
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MySQL</title>
    <link rel="stylesheet" type="text/css" media="screen" href="1basics.css" >
</head>
<body>
<div class="maincontrolbox">
    <div class="logobox"><img class="phplogopic" src="images/logophp7lightning.jpg"> </div>
 
    <form id="phpbasics" name="phpbasics" action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post" enctype="multipart/form-data">
 
        First name:  <input name="firstname" id="firstname" type="text" size=25> <br><br>
        Last name:  <input name="lastname" id="lastname" type="text" size=25> <br><br>
        Email:  <input name="email" id="email" type="text" size=25><br><br>
 
 
        City: <select id="city" name="city">
 
            <option value="none" selected>Please Choose...</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="深圳">深圳</option>
            <option value="Dallas">Dallas</option>
            <option value="Moscow">Moscow</option>
            <option value="Rio">Rio</option>
            <option value="Mumbai">Mumbai</option>
 
        </select><br><br>
 
 
        <input type="submit" name="execute" id="execute" value="Save Record in DB"><br><br>
 
    </form>
    <span style="font-weight: bold;">Result</span>:<br>
    <div id="resultbox">
 
        <?php if (isset($_POST['execute'])){
 
            echo $result ;
 
        }  ?>
 
    </div>
 
</div>
 
 
 
 
</body>
 
</html>