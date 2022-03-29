<?php 
   include 'connection.php';
      $id=$_GET['updateid'];
      $sql="SELECT * FROM arva WHERE id=$id";
      $result=mysqli_query($connaction,$sql);
      $row=mysqli_fetch_assoc($result);
      $name=$row['name'];
      $email=$row['email'];
      $mobile=$row['mobile'];
      $password=$row['password'];


if (isset($_POST['update_btn'])) {
    $name=$_POST['std_name'];
    $email=$_POST['std_email'];
    $mobile=$_POST['std_mobile'];
    $password=$_POST['std_pass'];

    $sql ="UPDATE arva SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
    $result= mysqli_query($connaction,$sql);
    if ($result) {
      //echo "Update sucessfully.";
      header("location: display.php");
    }else{
      die("Error:" .mysqli_connect_error($connaction));
    }
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <title>curd_app</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center py-3" style="font-size: 50px; text-transform: uppercase; color: #bdc3c7;">Curd_Opration</h2>

      <form action="" method="post">
        <div class="mb-3 form-group">
          <label class="form-label">Name:</label>
          <input type="text" name="std_name" class="form-control" placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name;?>">
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Email:</label>
          <input type="email" name="std_email" class="form-control" placeholder="Enter Your Email" autocomplete="off" value="<?php echo $email;?>">
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Mobile:</label>
          <input type="number" name="std_mobile" class="form-control" placeholder="Enter Your Mobile Number" autocomplete="off" value="<?php echo $mobile;?>">
        </div>        
        <div class="mb-3 form-group">
          <label class="form-label">Password:</label>
          <input type="password" name="std_pass" class="form-control" placeholder="Enter Your Password" autocomplete="off" value="<?php echo $password;?>">
        </div>
        <button type="submit" class="btn btn-primary" name="update_btn">Update</button>
      </form>   
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>    
  </body>
</html>