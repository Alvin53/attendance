<?php
    $title = 'Index';
   
    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    $result = $crud->getSpecialties();

?>
   
     <h1 class="text-center">WELCOME TO THE CLUB/ SPORTS REGISTRATION </h1>

      
        <br>
        <br>
        <br>
        <br>
 
<?php require_once 'includes/footer.php'; ?>