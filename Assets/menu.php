 <!-- Menu -->
 <ul>
    <li>
      <a href="../Homepage/homepage.php">Home</a>
      </li>

    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">New Technology</a>
        <div class="dropdown-content">
          <a href="../NewTechnology/Drone.php">Unmanned Drone</a>
          <!-- <a href="">Fingerprint Scanner</a>
          <a href="">Barcode Scanner</a>
          <a href="">Motion Sensor</a> -->
  
        </div>
      </li>

    <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn">Meet The Team</a>
      <div class="dropdown-content">
        <a href="../Meet The Team/Rodriguez.php">Sgt. Rodriquez</a>
        <!-- <a href="../Meet The Team/Hernandez.php">Cpl. HernandezRoman</a> -->
        <!-- <a href="../Meet The Team/Poole.php">Lcpl. Poole</a> -->
        <a href="../Meet The Team/Cheuk.php">Lcpl. Cheuk</a>

      </div>
    </li>

    <li><a href="../Comments/comments.php">Comments</a></li>

    <div class="topnav-right">
      <li><button onclick="document.getElementById('id01').style.display='block'">Login</button></li>
      <li><a href="../Register/register.php">Register</a></li>
    </div>
  </ul>
  <!-- Menu End -->

  <!-- Login -->

  <div id="id01" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
          title="Close Modal">&times;</span>
        <img src="../Images/login.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'"
          class="cancelbtn">Cancel</button>
        <span class="psw"><a href="#">Forgot password?</a></span>
      </div>
    </form>
  </div>
  </div>
  <!-- Login End -->