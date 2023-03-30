
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> php crud app</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src='main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
    <center>
        <h1>php crud</h1>
    </center>

<div class="container">

<?php
if(isset($_GET['msg']))
{
    $msg = $_GET['msg'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    '.$msg.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>'; 
}
?>
    <a href="addstudent.php" class="btn btn-dark">Add New User</a>  

    <table class="table table-responsive mt-5">
  <thead class="table-primary">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Course</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>


  
    <?php
    include "dbconn.php";
    $table='register';
         $sql= "SELECT * FROM $table";
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result))
         {
            ?>

    <tr>
      <th><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['course'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['id']?>"><button type="submit" name="submit" class="btn btn-warning">Edit</a></button></td>
      <td><a href="delete.php?id=<?php echo $row['id']?>"><button type="submit" name="submit" class="btn btn-danger">Delete</a> </button></td>
    </tr>

            <?php
         };

    ?>
   

    
   
  </tbody>
</table>
</div>
    
</body>
</html>