<?php

session_start();
if(isset($_POST["login"]))
{
    $email=$_POST["email"];
    $password=$_POST["password"];
    if($email=='kishan@gmail.com' && $password=='k123')
    {
        $_SESSION["email"]=$_POST["email"];
        echo "<h2 align='center' style='color:green'>You are Succesfully Logged in</h2>";
        header('refresh:4,welcome.php');
    }
    else
    {
        echo"<h2 align='center' style='color:red'>Your Email or Password is Incorrect</h2>";
        header('refresh:4,login.php');
    }
}
?>

<?php
require_once("header.php");
?>

<!--CONTENT START-->
<div class="container-fluid mt-4 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <h6>Account / Login</h6>

            
 <div class="container bg-white text-black mt-4 p-3">
    <h2 class="text-center"><strong>LOGIN HERE</strong></h2>

    <div class="row">
    <div class="col-md-4">    
    <div class="bg-danger mt-4 p-2"> <h6> Our Services </h6> </div>
    <ul>
        <li>Provide 24x7 Facility.</li>
        <li>Large Storage Available for Blood.</li>
        <li>Blood of All Blood Group Available.</li>
        <li>Blood Delivery Available direct to Hospital.</li>
        <li>Online Services Available on Whatsapp / Facebook.</li>
    </ul>
    </div>

    <div class="col-md-8">   
    <div class="bg-danger text-black mt-4 p-2"> <h6>Login With Us</h6></div>

    <!--LOGIN FORM START-->  
    <center>
    <form method="post">
    <div class="form-group col-md-8 mx-auto mt-4">
        <input type="email" name="email" placeholder="Enter Email to Proceed" class="form-control" required> 
    </div>

    <div class="form-group col-md-8 mx-auto mt-3">
        <input type="password" name="password" placeholder="Enter Password to Proceed" class="form-control" required>
    </div>

    <div class="form-group col-md-8 mx-auto mt-3">
        <input type="submit" name="login" class="btn btn-secondary btn-lg" value="Login">
        <b class="text-black"><a href="">Forget Password?</a></b>
    </div>

    <div class="form-group col-md-8 mx-auto mt-3">
        <b class="text-black">Don't Have An Account?<a href="register.html">Register Here</a></b>
    </div>
</form>
</center>
    <!--LOGIN FORM END-->
   
            </div>
         </div>
     </div>
   </div>
  </div>
</div>


<!--CONTENT END-->

<?php
require_once("footer.php");
?>