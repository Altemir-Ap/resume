<!-- Include session and Header-->
<?php include('../private/session.php');?>
<?php include('./templates/header.php');?>

<body>
  <?php include('./templates/links.php');?>
  <!-- Beginning Container -->
  <div class="container">
    <!-- Beginning Department Table-->
    <div class="db-table">
      <h1>Department table</h1>

      <button id="button-table" onclick="showTable()">
        Show table
      </button>

      <?php $sql = "SELECT * FROM departments ";  $result = mysqli_query($connection, $sql);  ?>

      <table id="dept" class="work-table shadow ">
        <thead>
          <tr>
            <th>Dept Number</th>
            <th>Dept Name</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($result as $row):?>
          <tr>
            <td>
              <?= $row['dept_no'] ?>
            </td>
            <td>
              <?= $row['dept_name'] ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- End Department Table-->

    <!-- Beginning Employee Table-->
    <div class="db-table">
      <h1>
        Employee Table
      </h1>

      <form method="POST">
        <input type="text" name="empId" required value="">

        <button type="submit">
          Search emp
        </button>
      </form>

      <!-- Checking which http method is being used-->
      <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"):
                    $id_emp = $_POST['empId'];
                    $sql = "SELECT * FROM dept_emp where emp_no='$id_emp'";
                    $result = mysqli_query($connection, $sql);
            ?>

      <table class="work-table shadow " id="employee-table">
        <thead>
          <tr>
            <th>Employee Number</th>
            <th>Department Number</th>
            <th>From</th>
            <th>To</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($result as $row):?>
          <tr>
            <td>
              <?= $row['emp_no'] ?>
            </td>
            <td>
              <?= $row['dept_no'] ?>
            </td>
            <td>
              <?= $row['from_date'] ?>
            </td>
            <td>
              <?= $row['to_date'] ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- Closing Connection -->
      <?php 
                $connection->close();
            ?>
      <!-- End Closing Connection-->
      <?php endif?>
      <!-- End http method Check -->

      <!-- Check Method for register message -->
      <div id="no-register">
        <?php  if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <span>Please, try again, register not found</span>
        <?php endif;?>
      </div>
      <!-- End Check Method for register message -->
    </div>
    <!-- End Container -->

    <!-- Beginning Scripts -->
    <script src="js/addStyle.js">
    </script>
    <!-- Beginning Scripts -->
</body>

</html>