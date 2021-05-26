<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="mo_id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
      if(isset($_POST['showbtn'])){
        include 'config.php';

        $mobile_id = $_POST['mo_id'];

        $sql = "SELECT * FROM mobilenumbers WHERE mo_id = {$mobile_id}";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

        if(mysqli_num_rows($result) > 0)  {
          while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Mobile Number</label>
            <input type="hidden" name="mo_id" value="<?php echo $row['mo_id']; ?>"/>
            <input type="text" name="mo_number" value="<?php echo $row['mo_number']; ?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
  }
}
}

?>
</div>
</div>
</body>
</html>
