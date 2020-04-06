<?php
session_start();
?>
<head>
    <link rel="stylesheet" href="Css/Css_WachtlijstDRN.css">
    <link rel="stylesheet" href="Css/CSS_Header_DRN.css">
    <meta charset="UTF-8">
    <title>DRN</title>
</head>
<section class="Header">
    <div class="WrapperHeader">
        <img class="Logo" src="Images/sitelogo.png" alt="sitelogo">
        <?php
        if (isset($_SESSION['userid']) == true || isset($_SESSION['adminid']) == true) {
            echo '<form action="Includes/Logout.php" method="post">
            <button type="submit" name="logoutsend">Log uit</button></form>';
        }
        ?>
    </div>
</section>
