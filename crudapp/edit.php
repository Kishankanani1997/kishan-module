<?php
include"dbconn.php";
$id = $_GET['id']; 

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $course = $_POST["course"];

    $sql="UPDATE register SET `name`='$name',`email`='$email',`phone`='$phone',`course`='$course' WHERE id=$id";

    $result = mysqli_query($conn,$sql);

    if($result)
    {
        header("Location:index.php?Data updated succesfully");
    }
    else
    {
        echo "Failed: " . mysqli_error($conn);
    }



}
?>


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
        <h1>php crud edit user</h1>
    </center>

<div class="container">

    <?php
         
        $sql = "SELECT * FROM  register where id = $id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result); 
    ?>
    

    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="post">
                <div class="mb-3">
                  <label>name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" >
                </div>
        
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>">
                  </div>

                  <div class="mb-3">
                  <label>Phone</label>
                  <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'] ?>">
                </div>
        
                  <div class="mb-3">
                    <label>Course</label>
                    <input type="text" name="course" class="form-control" value="<?php echo $row['course'] ?>">
                  </div>
        
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                
              </form>

        </div>
    </div>
</div>
    
</body>
</html>