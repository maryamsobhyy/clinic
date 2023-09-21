<?php
session_start();
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
        