<?php 
  include 'connection.php';
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

      <button class="btn btn-primary"><a href="index.php" style="text-decoration: none; color: #fff;">Add User</a></button>  

      <table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">Sl no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <?php 
            $sql="SELECT * FROM arva";
            $result= mysqli_query($connaction,$sql);
            if ($result) {
              while ($row=mysqli_fetch_assoc($result)) {
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['password'];
                echo '
                  <tr>
                  <th scope="row">'.$id.'</th>
                  <td>'.$name.'</td>
                  <td>'.$email.'</td>
                  <td>'.$mobile.'</td>
                  <td>'.$password.'</td>
                  <td>
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" style="text-decoration: none; color: #fff;">Update</a></button>
                  <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="text-decoration: none; color: #fff;">Delete</a></button>
                  </td>
                  </tr>';
              }
            }
        ?>
  </tbody>
</table>
    </div>


    <script src="js/bootstrap.bundle.js"></script>     
  </body>
</html>