<html>
    <title>Check</title>
    <meta name ="salut" content="test.php" />
    <body>
        <?php
        if ($_POST["prenom"] == "Yannick") {
            header('Location: Hindou.html');
        }
        else {
            header('Location: index.html');
        }
        ?>
    </body>
</html>