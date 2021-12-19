<?php 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");

    }else{
        //GET ID VALUES 
        $id = $_GET['id'];

        //CALL delete function
        $result=$crud->deleteAttendee($id);
        //Redirect to list
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    } 
    
?>