<!-- Menu Links-->
<div class="topnav">
        <a  href="index.php">
          <img id="logo" src="./images/logo.png" alt="">
        </a>
    <nav>
      <ul class="menu-links">
          <li>
          <!-- Check if theres a session to toggle the menu links -->
          <?php if(!isset($_SESSION['login_user'])):?>
            <a href="login.php" id="login" class="">Login</a>
          <?php else:?>
          <!-- End session checkin -->
          </li>
        <li>
            <a id="home" href="index.php" class="">Home</a>
        </li>
        <li>
            <a id="skills" href="skills.php"class="">Skills</a>  
        </li>
        <li>
            <a id="work" href="work.php" class="">Work experience</a>
        </li>
        <li>
            <a id="education" href="education.php" class="">Education</a>
        </li>
        <li>
            <a id="db_review" href="db_review.php" class="">DB Review</a>
        </li>
        <li>
            <a href="logout.php" class="">Logout</a>
        </li>
        <?php endif;?>
      </ul>
    </nav>
</div>
<!-- End Menu Links-->