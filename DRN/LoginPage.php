<?php
?>
<html lang="en">
<body>
<section class="Main">
    <div class="Wrapper">
        <div class="LoginModule">
            <h2>Log in als lid:</h2>
            <form action="Includes/UserLogin.php" method="post">
                <label for="usermail">E-mail:</label>
                <input type="email" name="usermail" placeholder="E-mail">

                <label for="usercode">Code:</label>
                <input type="password" name="usercode" placeholder="Code">

                <div class="Buttons">
                    <button type="submit" name="usersend">Login</button>
                </div>
            </form>
        </div>
        <div class="LoginModule">
            <h2>Log in als admin:</h2>
            <form action="Includes/AdminLogin.php" method="post">
                <label for="adminmail">E-mail:</label>
                <input type="email" name="adminmail" placeholder="E-mail">

                <label for="admincode">Code:</label>
                <input type="password" name="admincode" placeholder="Code">

                <div class="Buttons">
                    <button type="submit" name="adminsend">Login</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>