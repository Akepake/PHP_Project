<?php
    require "header.php";
?>
<div class="main-wrapper">
<main>
    
    <?php
    
    if (isset($_SESSION['userId'])) {
        echo '<p>You are logged in!</p>';
    } else {
        echo '<br><br><p>You are logged out!</p>';
    }
    
  
        
    ?>


</main>
    </div>

<?php
    require "footer.php";
?>