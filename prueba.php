<?php
session_start();
$_SESSION['capnum'] = ((isset($_SESSION['capnum'])) ? $_SESSION['capnum'] : 0);
if (isset($_GET['add'])) {
    $_SESSION['capnum'] ++;
}
?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <input type="submit" name="add" value="add" />
        </form>
    </body>
    <?php
    echo $_SESSION['capnum'];
    ?>
</html>
