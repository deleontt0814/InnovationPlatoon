<!DOCTYPE html>
<html>

<head>
<?php include '/Applications/MAMP/htdocs/Innovation/Assets/head.php'; ?>  
<style><?php include '/Applications/MAMP/htdocs/Innovation/Homepage/homepagestyle.css'?></style>
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
      <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE PLATOON</span></h5>
      <p>Located out of San Jose, CA, Combat Logistics Battalion 453 drafted an elite group of Marines capable 
        of solving modern day problems with solutions of the future.</p>
      <p>In addition to training and maintaining the high standards of the Marine Corps, 
        Innovation Platoon, CLB-453 works on designing and engineering new technology to be suuplement our capabilities at homepage 
        and increase our lethality overseas.</p>
      <div class="w3-panel w3-leftbar w3-light-grey">
        <p><i>"Some badass quote said by Sgt. Rodriguez and his innovation platoon and killing ISIS"</i></p>
        <p>- Sgt. Rodriguez, Innovation Platoon Sergeant</p>
      </div>
      <iframe style="width:100%;max-width:1000px; height: 420px;" src="https://youtube.com/embed/LLj5r3eoy_M" 
        class="w3-margin-top"></iframe>
      <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
      <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
    </div>
  </div>

  <!-- Contact/Area Container -->
  <div class="w3-container" id="where" style="padding-bottom:32px;">
    <div class="w3-content" style="max-width:700px">
      <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>

      <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
      <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required
            name="People"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required
            name="date" value="2017-11-16T20:00"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements"
            required name="Message"></p>
        <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>
  </div>

  <!-- End page content -->
  </div>

  <?php include '/Applications/MAMP/htdocs/Innovation/Assets/footer.php';?>

</body>

</html>