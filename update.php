<?php
$update=false;
include 'connn.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
$username = $_POST['username'];
$password = $_POST['password'];
extract($_GET);
$q = "UPDATE `tablecrud` SET username='$username' , password='$password' WHERE id='$id' ";
$result = mysqli_query($con,$q);
  if($result==true){
    $update=true;
  }
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  /*code for showing alert inside this php*/
  if($update){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Updated successfully </strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
  }
   ?>
  <div class="col-lg-4 m-auto">
    <form method="post">
      <br><div class="card">
        <div class="card-header bg-dark">
          <h1 class="text-white text-center">Update</h1>
        </div>
        <label> Username:</label>
        <input type="text" class="form-control" name="username"><br>
        <label> password:</label>
        <input type="text" class="form-control" name="password"><br>
        <button class="btn btn-success" type="submit"> Submit </button><br>
      </div>
    </form>
    <h5><a href="display.php"><input type="button" class="btn btn-primary" value="Display Data"></a></h5>
  </div>
</body>
</html>
