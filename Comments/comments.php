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
<style><?php include '/Applications/MAMP/htdocs/Innovation/Homepage/homepagestyle.css'?></style>
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

  <div class="maincontrolbox">
        <form id="phpbasics" name="phpbasics" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <input type="submit" name="execute" id="execute" value="Show records"><br><br>

</form>
<span style="...">Result</span>:<br>
<div id="resultbox">

<?php if (isset($_POST['execute'])) {

    $i = 1;

    while ($row = $result->fetch_assoc()) {
        
        echo "" . $row['name'] . "<br>" . $row['unit'] . "<br>" . $row['comment'] . "<br>";
        $i+=1;
    }


} ?>

</div>




  <!-- End page content -->
  </div>

  </form>

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>

</html>