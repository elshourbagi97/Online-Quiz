<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
    ?>
    <div class="error">
        <?php
    foreach ($_SESSION['errors'] as $error) {
        ?>
        <p><?php echo $error ?></p>
     <?php   
    }
    ?>
    </div>
    <?php
    unset($_SESSION['errors']); 
}
?>