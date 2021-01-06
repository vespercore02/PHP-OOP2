<?php 

require_once "Views/Layouts/head.php";


require_once "Views/Layouts/nav.php";
?>
<div class="container">
    <div class="row justify-content-md-center">
    
        <div class="col-8">

            <div class="my-3 p-3 bg-white rounded shadow-lg">
                
                
                <h3>Employee</h3>

                
                
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-lg">
                    
                <h6 class="border-bottom pb-2 mb-3">Add Member</h6>
                <form action="employee/add" method="post">
                    <div class="form-group mb-3">
                        <label for="lname">Last Name</label>
                        <input id="lname" class="form-control" type="text" name="last_name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="fname">First Name</label>
                        <input id="fname" class="form-control" type="text" name="first_name">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary" >Save</button>
                </form>
                
                
            </div>

            <div class="my-3 p-3 bg-white rounded shadow-lg">
                <h6 class="border-bottom pb-2 mb-0">Recent updates</h6>

                <?php    
                    foreach ($data as $emp) {
                        # code...
                        ?>

                        <div class="d-flex text-muted pt-3">
                            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>

                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                                <strong class="d-block text-gray-dark"><?php echo $emp['last_name'].", ".$emp['first_name']; ?></strong>
                                Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                            </p>
                        </div>
                    <?php
                    }

                ?>
                
                
            </div>
        </div>
    
    </div>
</div>