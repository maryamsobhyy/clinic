<?php
function getbooking(){
    $con = new PDO('mysql:host=localhost;dbname=clinic','root','');
    $sql="SELECT booking.email, doctors.name
    FROM booking
    JOIN doctors ON booking.doctor_id = doctors.id";
    $data = $con->query($sql);
    return $data->fetchAll(PDO::FETCH_ASSOC);
}
$booking=(getbooking());
require('../dashboard/majorsdb.php');
$booking_info=($db->getData("booking", "id,name,phone,email"));




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
      
        <th>Email of patient </th>
        
        <th>Physician</th>
        <th>Accepted</th>
        <th>Rejected</th>
        <th>Deleted</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        foreach($booking as $book):
        ?>
        <tr>
            
            <td>
                <?php echo $book['email'];?>
            </td>
           
            <td>
                Doctor/<?php echo $book['name'];?>
            </td>
            <td>
                <a href="#">Accepted</a>
            </td>
            <td>
                <a href="#">Rejected </a>
            </td>
            <td>
                <a href="#">Deleted</a>
            </td>
           
            
           
        </tr>
        <?php endforeach;?>
       
            
      <!-- Add more rows as needed -->
   

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    
</body>
</html>
