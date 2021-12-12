<?php
    $title = 'View Record';
   
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    // GET ATTENDEE BY ID
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    } else{
        include 'includes/errormessage.php';
    }
?>
 <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $result['firstname'] .' '. $result['lastname'];?>
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    <?php echo $result['name']; ?>
                </h6>
                <p class="card-text">
                   Date of Birth: <?php echo $result['dateofbirth'];?>            
                </p>
                <p class="card-text">
                    Email Address: <?php echo $result['emailaddress'];?>            
                </p>
                <p class="card-text">
                  Contact Info:  <?php echo $result['contactnumber'];?>            
                </p>
            </div>
        </div> 
        <br/>
            <div>
            <a href="viewrecords.php" class="btn btn-info">Back To List</a>
                <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-success">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record?');"href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
            </div>
                

                
<br>       
<br>       
<br>       
<br>       
<br>       
<?php require_once 'includes/footer.php'; ?>