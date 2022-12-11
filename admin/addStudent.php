 <?php
    require_once 'header.php';

    if(isset($_POST['addStudent'])){
         $roll = $_POST['roll'];
         $class = $_POST['class'];
         $name = $_POST['name'];
         $fname = $_POST['fname'];
         $mname = $_POST['mname'];
         $phone = $_POST['phone'];

         $photo = explode('.',$_FILES['photo']['name']);
         $photo = end($photo);
         $photo_name = $roll.'.'.$photo;

         $dataInsert = mysqli_query($conn, "INSERT INTO `students`(`roll`, `class`, `name`, `fname`, `mname`, `phone`, `photo`) VALUES ('$roll','$class','$name','$fname','$mname','$phone','$photo_name')");

         if($dataInsert){
            $success = 'Data Isert Success';
            move_uploaded_file($_FILES['photo']['tmp_name'],'../images/student/'.$photo_name);
         }else{
            $failed = 'Data Insert Filed';
         }
    }
?>

            <div class="col-sm-9">
                <div class="content">
                    <h1 class="text-primary"><i class="fa fa-user-plus"></i> Add Student</h1>
                        <div class="row">
                            <div>
                                <?php if(isset($success)){echo '<p class="alert alert-success col-sm-4 col-sm-offset-4">'.$success.'</p>';} ?>
                            </div>

                        <div>
                            <?php if(isset($failed)){echo '<p class="alert alert-danger col-sm-4 col-sm-offset-4">'.$failed.'</p>';} ?>
                        </div>
            
                </div>

                    <h2 class="text-center">Add Student Form</h2>

                    <div class="row">
                        <div class="col-sm-12 col-md-offset-2" style="margin-left:250px">
                            <form action="" enctype="multipart/form-data" method="POST" class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Roll</label>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="Roll" class="form-control" name="roll">
                                        <span class="error"><?php if(isset($name_error)){echo $name_error;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Class</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="class">
                                            <option value="Select">Select</option>
                                            <option value="CSE 1st Year">CSE 1st Year</option>
                                            <option value="CSE 2nd Year">CSE 2nd Year</option>
                                            <option value="CSE 3rd Year">CSE 3rd Year</option>
                                            <option value="CSE 4th Year">CSE 4th Year</option>
                                        </select>
                                        <span class="error"><?php if(isset($name_error)){echo $name_error;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="Name" class="form-control" name="name">
                                        <span class="error"><?php if(isset($name_error)){echo $name_error;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Fathers Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="Fathers Name" class="form-control" name="fname">
                                        <span class="error"><?php if(isset($email_error)){echo $email_error;} ?></span>
                                        <span class="error"><?php if(isset($email_exist)){echo $email_exist;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Mothers Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" placeholder="Mothers Name" class="form-control" name="mname">
                                        <span class="error"><?php if(isset($email_error)){echo $email_error;} ?></span>
                                        <span class="error"><?php if(isset($email_exist)){echo $email_exist;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Phone</label>
                                    <div class="col-sm-4">
                                        <input type="number" placeholder="Phone" class="form-control" name="phone">
                                        <span class="error"><?php if(isset($email_error)){echo $email_error;} ?></span>
                                        <span class="error"><?php if(isset($email_exist)){echo $email_exist;} ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-1 control-label">Upload Photo</label>
                                    <div class="col-sm-4">
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <input type="submit" value="Add Student" class="btn btn-primary pull-right" name="addStudent">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                            </div>
                
            </div>
        
<?php
    require_once 'footer.php';

?> 