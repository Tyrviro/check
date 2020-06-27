<html>
    <title>Check</title>
    <meta name ="salut" content="test.php" />
    <body>
        thanks to wait
        <?php
        if ($_POST["prenom"] == "Yannick") {
            header('Location: https://hindou.netlify.app/');
        }
        else {
            header('Location: https://welcom.netlify.app/');
        }
        ?>
    </body>
</html>