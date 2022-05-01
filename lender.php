<?php
session_start();
if(!isset($_SESSION['username'])){
   header("Location:login.php");
}
include "header.php";
$db = mysqli_connect('localhost', 'root', '', 'megabyte');
if (isset($_POST['continue'])) {
$bname = $_POST['bname'];
$bemail = $_POST['bemail'];
$bphone = $_POST['bphone'];
$grantdate = $_POST['grantdate'];
$duedate = $_POST['duedate'];
$amount = $_POST['amount'];
$interest = $_POST['interest'];
// $query = mysql_query("select id from tablename", $connection);


$sql = "INSERT INTO `lenders`(`name`, `email`, `phone`, `grantdate`, `duedate`, `amount`, `interest`) VALUES ('$bname','$bemail','$bphone','$grantdate','$duedate','$amount','$interest')";
          
        if(mysqli_query($db, $sql)){
            echo "data stored in a database successfully." 
                ; 
  
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($db);
        }
        mysqli_close($db);
        echo "<script>alert('Granted Successfully');</script>";
}

?>
<form style="width:80%;max-width:600px;margin:0px auto;box-shadow:0 0 5px rgba(0,0,0,0.4);padding:10px" method="POST">
<form>
  <div class="form-group">
    <h3>Borrower's Details</h3>
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="bname" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email Address:</label>
    <input type="email" class="form-control" id="formGroupExampleInput2" name="email"  required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Phone Number</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="bphone" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Granted Date</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" name="grantdate" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Due Date</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" name="duedate" required> 
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Amount</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" name="amount" required>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Interest Rate </label>
    *<small>In percentage</small>
    <input type="number" class="form-control" id="formGroupExampleInput2" name="interest" required>
  </div>
  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
   <input type="submit" value="Continue" name="continue" id="continue" class="btn btn-primary">
   </div>

</form>
</form>