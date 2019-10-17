<?php 

include 'dbconnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "SELECT * FROM comments";

    $result = $db->query($sql);

}

?>


<!DOCTYPE html>
<html>

<head>
  
<?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  
<style><?php include '/Applications/MAMP/htdocs/Innovation/Comments/comments.css'?></style>
<title>Comments</title>
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

  <div class="maincontrolbox" style="w3-center">
        <form id="phpbasics" name="phpbasics" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="submit" name="execute" id="execute" value="Refresh"><br><br>

</form>
<span ><h1 style="margin-left: 10%;">Comments</h1></span>:<br>
<div class="w3-panel w3-sand w3-round-xlarge w3-center">

<?php if (isset($_POST['execute'])) {

    while ($row = $result->fetch_assoc()) {
        
        echo "" . $row['comment'] . "<br>" . $row['name'] . ", " . $row['unit'] . "<br><br>";
      
    }

} ?>

</div>




  <!-- End page content -->
  </div>

  </form>

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>

</html>