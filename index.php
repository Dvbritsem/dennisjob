<?php
require 'Header.php';
?>
<main>
    <?php
        if (isset($_SESSION['userid']) == true) {
            require 'UserWachtlijst.php';
        }
        elseif (isset($_SESSION['adminid']) == true) {
            require 'AdminWachtlijst.php';
        }
        else {
            require 'LoginPage.php';
        }
    ?>
</main>
