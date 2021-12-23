<?php
    $title = 'Sports Register';
   
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    $result = $crud->getSpecialties();

?>
   
     <h1 class="text-center">CLUB/SPORT REGISTRATION</h1>

        <form method="post" action="success.php" >

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
                <label for="specialty" class="form-label">Sporting House</label>
                <select class="form-control" id="specialty" name="specialty">
                  
                <?php while($r = $result->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id']?>" ><?php echo $r['name'];?></option>
                    <?php }?>
                </select>
            </div>
            <div class="mb-3">
                <label for="team" class="form-label">Sporting Team</label>
                <input type="text" class="form-control" id="team" name="team">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input required type="email" class="form-control" id="email" name="email">
                <small id="emailHelp" class="form-text text-mute">Your email will remain private with Us!</small>
            </div>
            <div class = "form-group">
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>
            </div>
    
           <div class="custom-file">
                <label for="avatar" >Upload Image </label>
                <input type="file" accept="image/*"class="custom-file-input" id="avatar" name="avatar">
                <label class="custom-file-label" ></label> <br>
                <small id="imageHelp" class="form-text text-mute">File Upload Optional</small>

            </div>
            <br>
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