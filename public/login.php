<?php
session_start();
include '../private/db_connection.php';

//Check to see if the form (login section) has been submitted

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pass = $_POST['password'];

// create SQL statement
    $sql = "SELECT username FROM users WHERE username='$username' and password='$pass'";

// Query database
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

// count the number of records found
    $count = mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
    if ($count > 0) {
        $_SESSION['login_user'] = $row['username'];
        header('Location: index.php');
    } else {
        $error = 'swal("Try again", "Username or Password is invalid", "error");';
    }

}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_SESSION['login_user'])) {
        header("location:index.php");
    }
}

?>
<?php include './templates/header.php';?>


<body>

  <!-- Beginning Container -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php include './templates/links.php';?>

  <div class="container center-align">
    <div class="login-form flex">
      <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" required id="username" name="username" value=""><br>
        <label for="password">Password:</label>
        <input type="password" required id="password" name="password" value=""><br><br>
        <button type="submit" id="login-button">Login</button>
      </form>
    </div>
    <div>
      <script>
      <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo $error;
}
?>
      </script>
    </div>
  </div>
  <!--End Container-->
  <!-- Beginning Scripts -->
  <script src="js/addStyle.js">
  </script>

  <!-- Beginning End Scripts -->
</body>

</html>