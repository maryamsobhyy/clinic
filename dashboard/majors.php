<?php

require('../config/session.php');
require('../dashboard/majorsdb.php');
$majors=($db->getData("majors", "id,title"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majors </title>
    <link href="../assets/styles/majors.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    -->
</head>
<body>
<?php
             if (isset( $_SESSION['error'])):?>
                <div class=" alert alert-danger text-center">
                    <?php echo $_SESSION['error'];
        
                    unset ($_SESSION['error']); 
                    ?>
                </div>
                <?php endif;?>
                <?php if (isset( $_SESSION['sucess'])):?>
                <div class=" alert alert-danger text-center">
                    <?php echo $_SESSION['sucess'];
        
                    unset ($_SESSION['sucess']); 
                    ?>
                </div>
                <?php endif;?>

     <form action="../handlers/handlemajor.php" method="POST">
     <input type="text" name="major" placeholder="Enter Major">

     <button  type="submit"><a class="link" >Add New Major </a></button>
     
   </form>
        <!-- <?php    foreach($tasks1 as $task)
        ?>
         -->
        <tr>
            <!-- <?php
            foreach ($task as $key=>$value)
            
            ?> -->
            
        
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Delete </th>
        <th>Add</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        foreach($majors as $major):
        ?>
        <tr>
            <td>
                <?php echo $major['id'];?>
            </td>
            <td>
                <?php echo $major['title'];?>
            </td>
            <td>
                <a href="../handlers/deletemajor.php?id=<?php echo $major['id'];?>">Delete</a>
            </td>
            <td>
                <a href="../handlers/adddoctors.php?id=<?php echo $major['id'];?>">Add Doctors </a>
            </td>
            
           
        </tr>
        <?php endforeach;?>
       
            
      <!-- Add more rows as needed -->
   

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    
</body>
</html>


