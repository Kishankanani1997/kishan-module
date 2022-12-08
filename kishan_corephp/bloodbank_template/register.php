<?php
require_once("header.php");
?>

<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
            <h6>Account / Register</h6>

            
 <div class="container bg-white text-black mt-3 p-3">
    <h2 class="text-center"><strong>REGISTER HERE</strong></h2>

    <div class="row">
    <div class="col-md-4">    
    <div class="bg-danger mt-4   p-2"> <h6> Our Services </h6> </div>
    <ul>
        <li>Provide 24x7 Facility.</li>
        <li>Large Storage Available for Blood.</li>
        <li>Blood of All Blood Group Available.</li>
        <li>Blood Delivery Available direct to Hospital.</li>
        <li>Online Services Available on Whatsapp / Facebook.</li>
    </ul>
 </div>

    <div class="col-md-8">   
    <div class="bg-danger text-black mt-4 p-2">Login With Us</div>

 <div class="form-group col-md-8 mx-auto mt-3">
    <input type="name" name="firstname" placeholder="Enter your Name" required class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-3">
    <input type="name" name="surname" placeholder="Enter your Surname" required class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-3">
    <input type="email" name="emain" placeholder="Enter Email to Proceed" required class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-3">
    <input type="passwored" name="password" placeholder="Enter Password to Proceed" required class="form-control">
</div>

<div class="form-group col-md-8 mx-auto mt-3">
    <label><strong>Select Your Gender:</strong></label>
    <input type="radio" id="gender" name="gender" value="male">MALE
    <input type="radio" id="gender" name="gender" value="male">FEMALE
    </div> 

 <div class="form-group col-md-8 mx-auto mt-3">
    <label><b>Select City:</b></label>
    		<select>
                <option>Select</option>
    			<option>Rajkot</option>
    			<option>Ahmedabad</option>
    			<option>Surat</option>
    			<option>Vadodara</option>
    		</select>
 </div>   

<div class="form-group col-md-8 mx-auto mt-2">
  <input type="submit" name="login" class="btn btn-success btn-lg" value="Register">
  <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset">
</div>

<div class="form-group col-md-8 mx-auto mt-2">
    <b class="text-black">Already Have An Account?<a href="login.html">Login Here</a></b>
</div>

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