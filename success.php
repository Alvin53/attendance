<?php
    $title = 'Success';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
   // require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $specialty = $_POST['specialty'];
        $team = $_POST['team'];


        
        $orig_file = $_FILES["avatar"]["tmp_name"] ;
        $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = $target_dir . basename($FILES["avatar"]["name"]);
        move_uploaded_file($orig_file,$destination);

        //Call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $gender, $specialty,$team,$destination);
        $specialtyName = $crud->getSpecialtyById($specialty);
        if($isSuccess){
            echo '<h1 class="text-center text-success ">You Have Been Registered!</h1>';
          //  SendEmail::SendMail($email,'You Have Been Registered in Your respective Club','You have successfully registered !');
           include 'includes/successmessage.php';

        }else{
            include 'includes/errormessage.php';
        }

    }
 ?>
 <!-- This prints out the values that uswere passed to the action page using method="get"
 
      <h1 class="text-center text-success ">You Have Been Registered</h1>-->
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_POST['firstname'] .' '. $_POST['lastname'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo $specialtyName['name']; ?>
                </h6>
                <p class="card-text">
                   Date of Birth: <?php echo $_POST['dob'];?>            
                </p>
                <p class="card-text">
                    Email Address: <?php echo $_POST['email'];?>            
                </p>
                <p class="card-text">
                  Gender:  <?php echo $_POST['gender'];?>            
                </p>
                <p class="card-text">
                  Sporting Team:  <?php echo $_POST['team'];?>            
                </p>
            </div>
        </div> 
       


 <br>       
 <br>       
 <br>       
 <br>       
 <br>       
<?php require_once 'includes/footer.php'; ?>