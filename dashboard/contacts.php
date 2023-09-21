<?php
require('../dashboard/majorsdb.php');
$contacts=($db->getData("contacts", "id,name,phone,email,message"));
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

   </form>
<div class="container">
  <table class="table">
    <thead>
      <tr>
      
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        foreach($contacts as $contact):
        ?>
        <tr>
        <td>
                <?php echo $contact['id']?>
            </td>
            
            <td>
                <?php echo $contact['name']?>
            </td>
           
            <td>
                <?php echo  $contact['email'];?>
            </td>
            <td>
               <?php echo  $contact['phone'];?>
            </td>
            <td>
               <?php echo  $contact['message'];?>
            </td>
           
           
           
            
           
        </tr>
        <?php endforeach;?>
       
            
      <!-- Add more rows as needed -->
   

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    
</body>
</html>
