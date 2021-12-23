<?php
    $title = 'Contact Us'; 

    require_once 'includes/header.php'; 
   require_once 'db/conn.php'; 
?>
   
 
  

    <form method="post" action="success.php" enctype="multipart/form-data">
    <br>

    <h1 class="text-center"> Contact Us Here</h1>
    <br>
    <h5 class="text-center"> WE MAKE COMMUNICATION EASY</h5>
    <div class="card-body">
    <?php 

//php tag to facilitate using php functions

echo '<h3 class="text-center">If You require our assistance, You are at the correct place<h3>';

echo '<h5 class="text-center"> Our email is SchoolSporting@gmail.com</h5>';

  echo '<h5 class="text-center"> CONTACT US AT (876) 242-2442 </h5>';



?>
<br>
<br>

<br>
<br>
<br>
<br>

    </div>
</div>

<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>