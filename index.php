<!doctype html>
<html>
<head>
</head>
<body>
    <h1>Auth Service, hot like your mom</h1>
    <form action="form_handler.php" method="post">
        <label for="f_name">
        First Name:
        </label>
        <input type="text" />
        <br />

        <label for="l_name">
        Last Name:
        </label>
        <input type="text" />
        <br />

        <label for="email">
        Email:
        </label>
        <input type="email" />
        <br />

        <label for="phone">
        phone:
        </label>
        <input type="text" />
        <br />
        
        <input type="submit" value="Sign Up" />
    </form>

    <?php
        if (isset($_GET['message'])){
            echo"<h1>".htmlspecialchars($_GET['message'])."</h1>";
        }
    ?>

</body>
</html>
