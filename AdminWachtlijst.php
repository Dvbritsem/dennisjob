<?php
    require 'Includes/database.php';
    if (!isset($_SESSION['adminid'])) {
        header("Location: index.php");
        exit();
    }

    $bevers = "SELECT * FROM user
            WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 8 
            AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 1 
            ORDER BY signupdate;";
    $result = mysqli_query($conn, $bevers);
    $resultcheck = mysqli_num_rows($result);

    $welpen = "SELECT * FROM user
            WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 10 
            AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 8 
            ORDER BY signupdate;";
    $result2 = mysqli_query($conn, $welpen);
    $resultcheck2 = mysqli_num_rows($result2);

    $zeeverkenners = "SELECT * FROM user
            WHERE (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) < 15 
            AND (YEAR(NOW()) - YEAR(birthday) - (DATE_FORMAT(NOW(), '%m%d') < DATE_FORMAT(birthday, '%m%d'))) >= 10 
            ORDER BY signupdate;";
    $result3 = mysqli_query($conn, $zeeverkenners);
    $resultcheck3 = mysqli_num_rows($result3);

?>
<section class="Wrapper">
    <div class="DataModule">
        <h3>Bevers:</h3>
        <table cellpadding="3">
            <tr>
                <th>User ID</th><th>E-Mail</th><th>Naam</th>
            </tr>
            <?php
                if ($resultcheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row['userid'] . "</td><td>" . $row['usermail'] . "</td><td>" . $row['username'] . "</td></tr>";
                    }
                }
            ?>
        </table>
    </div>
    <div class="DataModule">
        <h3>Welpen:</h3>
        <table cellpadding="3">
            <tr>
                <th>User ID</th><th>E-Mail</th><th>Naam</th>
            </tr>
            <?php
            if ($resultcheck2 > 0) {
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo "<tr><td>" . $row['userid'] . "</td><td>" . $row['usermail'] . "</td><td>" . $row['username'] . "</td></tr>";
                }
            }
            ?>
        </table>
    </div>
    <div class="DataModule">
        <h3>Zeeverkenners:</h3>
        <table cellpadding="3">
            <tr>
                <th>User ID</th><th>E-Mail</th><th>Naam</th>
            </tr>
            <?php
            if ($resultcheck3 > 0) {
                while ($row = mysqli_fetch_assoc($result3)) {
                    echo "<tr><td>" . $row['userid'] . "</td><td>" . $row['usermail'] . "</td><td>" . $row['username'] . "</td></tr>";
                }
            }
            ?>
        </table>
    </div>
    <?php
        if (!isset($_SESSION['founduser'])) {
    ?>
    <div class="DataModule">
        <h3>Selecteer een lid:</h3>
        <form action="Includes/AdminSaveProfiles.php" method="post">
        <label for="searchuserid">User ID:</label>
        <input type="number" name="searchuserid">

        <div class="Buttons">
            <button type="submit" name="searchuser">Selecteren</button>
        </div>
        </form>
    </div>
    <?php
        }
        if (isset($_SESSION['founduser'])) {
    ?>
    <div class="DataModule">
        <h3>Gegevens lid:</h3>
        <form action="Includes/AdminSaveProfiles.php" method="post">
            <label for="newusermail">E-mail:</label>
            <input type="email" name="newusermail" value="<?php echo $_SESSION['foundusermail']; ?>">

            <label for="newusername">Naam:</label>
            <input type="text" name="newusername" value="<?php echo $_SESSION['foundusername']; ?>">

            <label for="newbirthday">Geboorte Datum:</label>
            <input type="date" name="newbirthday" value="<?php echo $_SESSION['foundbirthday']; ?>">

            <div class="Buttons">
                <button type="submit" name="DataSave">Opslaan</button>
                <button type="submit" name="UserDelete" onclick="return confirm('Weet je zeker dat je deze gebruiker wil verwijderen?')">Verwijderen</button>
            </div>
        </form>
    </div>
    <?php
        }
    ?>
</section>