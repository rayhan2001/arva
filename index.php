<?php 
include 'connection.php';
if (isset($_POST['submit_btn'])) {
    $name=$_POST['std_name'];
    $email=$_POST['std_email'];
    $mobile=$_POST['std_mobile'];
    $password=$_POST['std_pass'];


    $sql ="INSERT INTO arva (name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
    $result= mysqli_query($connaction,$sql);
    if ($result) {
      //echo "Data insert sucessfully.";
      header("location: display.php");
    }else{
      die("error".mysqli_connect_error());
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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>curd_app</title>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center py-3" style="font-size: 50px; text-transform: uppercase; color: #bdc3c7;">Curd_Opration</h2>

      <form action="" method="post">
        <div class="mb-3 form-group">
          <label class="form-label">Name:</label>
          <input type="text" name="std_name" class="form-control" placeholder="Enter Your Name" autocomplete="off">
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Email:</label>
          <input type="email" name="std_email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Mobile:</label>
          <input type="number" name="std_mobile" class="form-control" placeholder="Enter Your Mobile Number" autocomplete="off">
        </div>        
        <div class="mb-3 form-group">
          <label class="form-label">Password:</label>
          <input type="password" name="std_pass" class="form-control" placeholder="Enter Your Password" autocomplete="off">
        </div>
        <div class="mb-3 form-group">
          <label class="form-label">Gender:</label><br>
          <input type="radio" name="std_gender" value="male">Male<br>
          <input type="radio" name="std_gender" value="female">Female<br>
          <input type="radio" name="std_gender" value="others">Others
        </div>
        <div class="mb-3_form-group">
          <label class="form-label">Country:</label><br>
          <select name="country">
          <option>Select Your Country</option>
          <option value="bangladsh">BANGLADSH</option>
          <option value="usa">USA</option>
          <option value="uk">UK</option>
          <option value="india">INDIA</option>          
        </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3" name="submit_btn">Submit</button>
      </form>   
    </div>



    <script src="js/bootstrap.bundle.js"></script>    
  </body>
</html>