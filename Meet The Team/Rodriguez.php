<!DOCTYPE html>
<html>

<head>


  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  
  <style><?php include '/Applications/MAMP/htdocs/Innovation/Meet The Team/Rodriguez.css'?></style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>Sgt. Rodriguez | Chief</title> <!-- title on webpage tab-->
</head>

<body>

  <!-- Banner -->
   <div class="hero-image">
    <div class="hero-text">
    </div>
  </div> 
  <!-- Banner End -->

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/menu.php';?>


  <!-- Body -->

  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  background-image: url(../Images/SgtRod.png);
  width: 90%;
  height:500px;
  background-position: center;
  background-size: cover;
}

.fakeimg2 {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
  background-image: url(../Images/login.png);
  width: 150px;
  height:350px;
  background-position: center;
  background-size: cover;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }

  .header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}
}
</style>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Sgt. Rodriguez</h2>
      <h5>CLB-453 | Innovation Chief</h5>
      <div class="fakeimg" >Image</div>
      <p>Founder and leader of the new cell...</p>
      <p>Started the Innovation Platoon in 2017 as a prototype cell to expand the Marine Corps technological capabilies by utilizing 
        the skills our Reservists have from their civilian lives.
      </p>
      <p>
        Currently enrolled in a Bachelor of Science in Computer Engineering at UCLA. 
      </p>
    </div>

  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg2" style="height:100px;"></div>
      <p>From: San Antonio Texas</p>      
      <p>Enlisted: November 10, 2011</p>
      <p>DOB: December 7, 1990</p>

    </div>
  
    
  </div>
</div>

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>

</html>