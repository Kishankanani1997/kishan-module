<div class="container p-3 mt-4">
    <h2 class="text-center bg-primary text-dark p-3"><i class="bi bi-apple text-dark"></i> KISHAN CRUD APP <i class="bi bi-google-play text-dark"></i> </h2>
    <div class="content mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info btn-lg mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Customer <i class="bi bi-file-person text-danger"></i>
        </button>

     <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Detail Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                <label> Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter You Name" required> <br>

                <label> Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Enter You Email" required> <br> 

                <label> Password:</label>
                <input type="password" name="pass" class="form-control" placeholder="Enter You Password" required> <br>

                <label> Number:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter You Number" required> <br>

                <label>Add Photo: </label><input type="file"><br> <br>

                <label>Select State:</label>
                <select name="state" class="form-control" placeholder="Enter Your Number *" required>
                    <option value="">-State-</option>
                    <?php
                    foreach($showstate as $showstate1)
                    {
                    ?>
                    <option value="<?php echo $showstate1["state_id"];?>"><?php echo $showstate1["state_name"];?></option>
                    <?php
                    }
                    ?>
                </select> <br>    

                <label>Select City:</label>
                <select name="state" class="form-control" placeholder="Enter Your Number *" required>
                    <option value="">-State-</option>
                  <?php
                  foreach($showcity as $showcity1)
                  {
                  ?>
                  <option value="<?php echo $showcity1["city_id"];?>"><?php echo $showcity1["city_name"];?></option>
                  <?php
                  }
                  ?>
                </select> <br>
                </form>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-success">Login</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
            </div>
            </div>
        </div>
        </div>

        <table class="table table-responsive mt-4 p-3 ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Number</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td>100</td>
                    <td><a href="" class="btn btn-success"><i class="bi bi-eye-fill"></i></a> | <a href="" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a> | <a href="" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a></td>
                </tr>
                    
            </thead>
        </table>

  </div>
</div>