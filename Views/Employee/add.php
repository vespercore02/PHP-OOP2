<?php 

require_once "Views/Layouts/head.php";


require_once "Views/Layouts/nav.php";
?>

<div class="container">
    <div class="row justify-content-md-center">
    
        <div class="col-8">

            <?php if (isset($data['info'])) {
                # code...
                echo $data['info'];
            }

            ?>

            <div class="my-3 p-3 bg-white rounded shadow-lg">
                        
                <h6 class="border-bottom pb-2 mb-3">Add Member</h6>
                <form action="add" method="post">
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
        </div>
    
    </div>
</div>