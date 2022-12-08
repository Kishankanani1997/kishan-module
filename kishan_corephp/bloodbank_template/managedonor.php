<?php
require_once("header.php");
?>

<!--CONTENT START-->
<div class="container bg-secondary text-black mt-4 p-3">
    <h2 class="text-center"><strong>SHOWING BLOOD DONOR DATA</strong></h2>

    
    <div class="col-md-12">   
        <div class="bg-white text-black mt-3 p-1 text-center"><h5>Managing Donor Data</h5></div>

        <button type="button" class="btn btn-danger btn-lg mt-3" data-bs-toggle="modal" data-bs-target="#AddEmp">ADD DONOR <i class="bi bi-file-person" ></i></button>

        <table class="table table-responsive table-stripped table-bordered mt-2">
            <tr class="text-black bg-white text-center">
                <th>Id</th>
                <th>Donor Name</th>
                <th>Donor Surname</th>
                <th>Donor Mobile</th>
                <th>City</th>
                <th>State</th>
                <th>Blood Group</th>
                <th>Action</th>
            </tr>

            <tr class="text-dark text-center">
                <th>1.</th>
                <th>Ramesh</th>
                <th>Patel</th>
                <th>99876 12980</th>
                <th>Vapi</th>
                <th>Gujarat</th>
                <th>B<sup>+</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>
            

            <tr class="text-dark text-center">
                <th>2.</th>
                <th>Hitesh</th>
                <th>Patel</th>
                <th>99099 85341</th>
                <th>Ahmedabad</th>
                <th>Gujarat</th>
                <th>AB<sup>+</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>3.</th>
                <th>Shyam</th>
                <th>Ravani</th>
                <th>98790 31658</th>
                <th>Rajkot</th>
                <th>Gujarat</th>
                <th>A<sup>+</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>4.</th>
                <th>Sakshi</th>
                <th>Joshi</th>
                <th>99765 12390</th>
                <th>Vadodara</th>
                <th>Gujarat</th>
                <th>O<sup>-</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>5.</th>
                <th>Darshil</th>
                <th>Desai</th>
                <th>99765 12390</th>
                <th>Surat</th>
                <th>Gujarat</th>
                <th>AB<sup>+</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>6.</th>
                <th>Darshil</th>
                <th>Desai</th>
                <th>99765 12390</th>
                <th>Surat</th>
                <th>Gujarat</th>
                <th>A<sup>-</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>7.</th>
                <th>Sailesh</th>
                <th>Patel</th>
                <th>99765 12390</th>
                <th>Morbi</th>
                <th>Gujarat</th>
                <th>O<sup>+</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

            <tr class="text-dark text-center">
                <th>8.</th>
                <th>Darshan</th>
                <th>Savaliya</th>
                <th>99765 90612</th>
                <th>Ahmedabad</th>
                <th>Gujarat</th>
                <th>B<sup>-</sup></th>
                <td><a href="#" class="bi bi-trash text-danger"></a> | <a href="#" class="bi bi-pencil-square text-info"></a></td>
            </tr>

        </table>
    </div>
    </div>

    <!--ADD DONOR MODAL HERE--> 
    <div class="modal fade" id="AddEmp" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content p-4">

    <!--ADD DONOR FORM HERE-->
        <div class="bg-danger p-3 text-white text-center mt-4"><strong>ADD BLOOD DONOR</strong><button type="button" class="btn btn-sm bg-info float-end" data-bs-dismiss="modal">&times;</button></div>

    <!--REGISTER HERE-->

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
                
<!--CONTENT END-->


<?php
require_once("footer.php");
?>