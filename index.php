<?php

$verte = 1;

if (isset($_POST['bbd'])) {
    $verte = $_POST['bbd'] + 1;
}

?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <button type="submit" name="bbd" value="<?php print $verte; ?>">
                <?php print $verte; ?>
            </button>
        </form>
    </body>
</html>
