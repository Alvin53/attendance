<?php
    $title = 'Index';
   
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    $result = $crud->getSpecialties();

?>
   
     <h1 class="text-center">Registration for IT Conference</h1>

        <form method="post" action="success.php">
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input required type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input required type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob">
            </div>
            <div class="mb-3">
                <label for="specialty" class="form-label">Area of Expertise</label>
                <select class="form-control" id="specialty" name="specialty">
                  
                <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id']?>" ><?php echo $r['name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input required type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="contact" name="contact">
            </div>
           <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary " name="submit">Submit</button>
           </div>
        </form>  
        <br>
        <br>
        <br>
        <br>
        <br>
 
<?php require_once 'includes/footer.php'; ?>