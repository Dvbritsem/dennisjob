<?php
    require 'Includes/database.php';
    if (!isset($_SESSION['userid'])) {
        header("Location: index.php");
        exit();
}

$userid = $_SESSION['userid'];
$sql = "SELECT * FROM user WHERE userid=" . $userid . ";";
$result = mysqli_query($conn, $sql);
$resultcheck = mysqli_num_rows($result);

$datazeeverkenners = array();
$datawelpen = array();
$databevers = array();
$place = 0;
$group = "";

//Place Calculator Bevers
$userplacebevers = "SELECT userid, username, usermail, birthday, ROW_NUMBER() OVER w AS num FROM user 
                    WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 8   
                    AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 1 
                    WINDOW w AS (ORDER BY signupdate);";
$result2 = mysqli_query($conn, $userplacebevers);
$resultcheck2 = mysqli_num_rows($result2);
if ($resultcheck2 > 0) {
    while (($row2 = mysqli_fetch_assoc($result2))) {
        $databevers[] = $row2;
    }
    for ($i = 0; $i < count($databevers); $i++) {
        if ($databevers[$i]['userid'] == $userid) {
            $place = $i + 1;
            $group = "Bevers";
        }
    }
}

//Place Calculator Welpen
$userplacewelpen = "SELECT userid, username, usermail, birthday, ROW_NUMBER() OVER w AS num FROM user 
                    WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 10   
                    AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 8 
                    WINDOW w AS (ORDER BY signupdate);";
$result3 = mysqli_query($conn, $userplacewelpen);
$resultcheck3 = mysqli_num_rows($result3);
if ($resultcheck3 > 0) {
    while (($row2 = mysqli_fetch_assoc($result3))) {
        $datawelpen[] = $row2;
    }
    for ($i = 0; $i < count($datawelpen); $i++) {
        if ($datawelpen[$i]['userid'] == $userid) {
            $place = $i + 1;
            $group = "Welpen";
        }
    }
}

//Place Calculator Zeeverkenners
$userplacezeeverkenners = "SELECT userid, username, usermail, birthday, ROW_NUMBER() OVER w AS num FROM user 
                           WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 15   
                           AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 10 
                           WINDOW w AS (ORDER BY signupdate);";
$result4 = mysqli_query($conn, $userplacezeeverkenners);
$resultcheck4 = mysqli_num_rows($result4);
if ($resultcheck4 > 0) {
    while (($row2 = mysqli_fetch_assoc($result4))) {
        $datazeeverkenners[] = $row2;
    }
    for ($i = 0; $i < count($datazeeverkenners); $i++) {
        if ($datazeeverkenners[$i]['userid'] == $userid) {
            $place = $i + 1;
            $group = "Zeeverkenners";
        }
    }
}
?>
<section class="WrapperUser">
    <div class="DataModule">
        <?php
        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <h2>Gegevens lid:</h2>
                <form action="Includes/UserSaveProfile.php" method="post">
                    <label for="newusermail">E-mail:</label>
                    <input type="email" name="newusermail" value="<?php echo $row['usermail']; ?>">

                    <label for="newusername">Naam:</label>
                    <input type="text" name="newusername" value="<?php echo $row['username']; ?>">

                    <label for="newbirthday">Geboorte Datum:</label>
                    <input type="date" name="newbirthday" value="<?php echo $row['birthday']; ?>">
                    <h5>*Wij gebruiken de geboortedatum om de speltak te bepalen.</h5>

                    <div class="Buttons">
                        <button type="submit" name="DataSave">Opslaan</button>
                    </div>
                </form>
                <?php
            }
        }
        ?>
    </div>
    <div class="PlaceModule">
        <h3>Plek op de<br>  wachtlijst:</h3>
        <?php
        echo "<h2>" . $place . "</h2>";
        ?>
        <h3>Speltak:</h3>
        <?php
        echo "<h4>" . $group . "</h4>";
        ?>
    </div>
</section>
<?php
?>