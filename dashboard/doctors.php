<?php
// include'./database.php';
session_start();
// $tasks=($user->getData("tasks", "id,title"));
?>
<link href="style.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Add Task</title>
</head>
<body>
<form action="./createtask.php" method="POST">
    <?php if (isset($_SESSION['sucess'])):
    ?>
    <div><?php  echo $_SESSION['sucess'];
    session_unset();
    ?></div>
    <?php endif;?>

    <label for="task">Task:</label><br>
    <input type="text" id="task" name="title"><br>
    <input type="submit" name="submit" value="Add Task">
    <?php if (isset($_SESSION['error'])):
    ?>
    <div><?php  echo $_SESSION['error'];
    session_unset();
    ?></div>
    <?php endif;?>
    
   
  </form>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src=https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>

</body>
</html>
<link  href="" rel="stylesheet">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>CONTENT</th>
            <th>ACTIONS</th>
            <th>ACTIONS</th>
            
        </tr>
    </thead>
    <tbody>
        <!-- <?php foreach($tasks as $task):?>
        
        <tr>
            <td>
                <?php echo $task['id'];?>
               
            </td>
            <td>
            <?php echo $task['title'];?> -->
                
            </td>
            <td>
                <a href="./deletetask.php?id=<?php echo $task['id'];?>">Delete</a>
            </td>
            <td>
                <a href="./updatetask.php?id=<?php echo $task['id'];?>">Update</a>
            </td>
           
        </tr>
        <?php endforeach;?>

       
       
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src=https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
