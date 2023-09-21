<?php
session_start();
require('../dashboard/majorsdb.php');
 $id=$_GET['id'];
$doctors=($db->getData("doctors", "id,name,bio"));
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
<form action="./haandledoctor.php" method="POST">
     <input type="text" name="name" placeholder="Enter A new doctor">
     <input type="text" name="bio" placeholder="Enter his bio">
     <input type="hidden" name="major_id"  value="<?php echo $id?>">

     <button  type="submit"><a class="link" ></a>Add new doctor</button>
     
     
   </form>
           
<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>delete</th>

      </tr>
    </thead>
    <tbody>
    <?php 
         foreach($doctors as $doctor):
         ?>
        <tr>
            <td>
            
                <?php echo $doctor['id'];?>
            </td>
            <td>
                <?php echo $doctor['name'];?>
            </td> 
            <td>
                <a href="./deletedoctor.php?id=<?php echo $doctor['id'];?>">Delete</a>
            </td>
           
           
        
        </tr>
        <?php endforeach;?>
       
</body>
</html>
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
