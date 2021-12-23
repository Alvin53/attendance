<?php
    $title = 'Index';
   
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    $result = $crud->getSpecialties();

?>

     
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      
    </header>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">REGISTER FOR YOUR TEAM NOW</h1>
        <p class="col-md-8 fs-4">Red house is the defending champions in the school football, be sure to pick the right team when registering.</p>
        <a  href="login.php"><button class="btn btn-primary btn-lg"  type="button">Register Today</button></a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>DO YOU HAVE WHAT IT TAKES THIS SEASON</h2>
          <p>Never try to quit, quiting is not an option in our book.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>BE SURE TO CONTACT US!</h2>
          <p></p>
        </div>
      </div>
    </div>
        <br>
        <br>
        <br>
        <br>
 
<?php require_once 'includes/footer.php'; ?>