<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <?php
    include 'connn.php';
    $q="SELECT * FROM `tablecrud`";
    $result=mysqli_query($con,$q);
    $sno=0;
   while($res=mysqli_fetch_array($result)){
     $sno=$sno+1;
   ?>
  <tbody>
    <tr>
      <td><?php echo $sno ?></td>
      <td><?php echo $res['username']?></td>
      <td><?php echo $res['password']?></td>
      <td><a href="delete.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Delete"></a></td>
      <td><a href="update.php?id=<?php echo $res['id']?>"><input type="button" class="btn btn-primary" value="Update"></a></td>

    </tr>
  </tbody>
<?php }?>
</table>
    <h5><a href="create.php"><input type="button" class="btn btn-primary" value="Create"></a></h5>
</div>
</div>
</div>
</body>
</html>
