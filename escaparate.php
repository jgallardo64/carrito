<?php
session_start();

$_SESSION['final'] = time();

$_SESSION['arroz'] = ((isset($_SESSION['arroz'])) ? $_SESSION['arroz'] : 0);
$_SESSION['macarrones'] = ((isset($_SESSION['macarrones'])) ? $_SESSION['macarrones'] : 0);
$_SESSION['tomates'] = ((isset($_SESSION['tomates'])) ? $_SESSION['tomates'] : 0);
$_SESSION['platanos'] = ((isset($_SESSION['platanos'])) ? $_SESSION['platanos'] : 0);
if (isset($_GET['masArroz'])) {
    $_SESSION['arroz'] ++;
}

if (isset($_GET['menosArroz'])) {
    $_SESSION['arroz'] --;
}

if (isset($_GET['quitarArroz'])) {
    $_SESSION['arroz'] = 0;
}

if (isset($_GET['masTomates'])) {
    $_SESSION['tomates'] ++;
}

if (isset($_GET['menosTomates'])) {
    $_SESSION['tomates'] --;
}

if (isset($_GET['quitarTomates'])) {
    $_SESSION['tomates'] = 0;
}

if (isset($_GET['masPlatanos'])) {
    $_SESSION['platanos'] ++;
}

if (isset($_GET['menosPlatanos'])) {
    $_SESSION['platanos'] --;
}

if (isset($_GET['quitarPlatanos'])) {
    $_SESSION['platanos'] = 0;
}

if (isset($_GET['masMacarrones'])) {
    $_SESSION['macarrones'] ++;
}

if (isset($_GET['menosMacarrones'])) {
    $_SESSION['macarrones'] --;
}

if (isset($_GET['quitarMacarrones'])) {
    $_SESSION['macarrones'] = 0;
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="windows-1252">
        <title>Escaparate</title>
    </head>
    <body>        
        <a href="carrito.php"><img src="carrito.png" width="30px"></a>
        
        <?php
        if (!isset($_COOKIE['inicio'])) {
            setcookie('inicio', $_SESSION['final'], time() + 600);
        } else {
            echo 'Tiempo desde inicio sesion: ' . ($_SESSION['final'] - $_COOKIE['inicio'] . ' segundos');
        }
        ?>
        
        <table style="text-align: center; font-size:20px">
            <tr>
                <td><img src="arroz.png"></td>
                <td><img src="macarrones.png"></td>
                <td><img src="platanos.png"></td>
                <td><img src="tomates.png"></td>
            </tr>
            <tr>
                <td><?= $_SESSION['arroz'] ?> unidades</td>
                <td><?= $_SESSION['macarrones'] ?> unidades</td>
                <td><?= $_SESSION['platanos'] ?> unidades</td>
                <td><?= $_SESSION['tomates'] ?> unidades</td>
            </tr>
            <tr>
                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <button type="submit" name="masArroz" value="masArroz"><img src="mas.png"></button>
                        <button type="submit" name="menosArroz" value="menosArroz"><img src="menos.png"></button>
                        <button type="submit" name="quitarArroz" value="quitarArroz"><img src="papelera.png"></button>
                    </form>
                </td>
                <td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <button type="submit" name="masMacarrones" value="masMacarrones"><img src="mas.png"></button>
                        <button type="submit" name="menosMacarrones" value="menosMacarrones"><img src="menos.png"></button>
                        <button type="submit" name="quitarMacarrones" value="quitarMacarrones"><img src="papelera.png"></button>
                    </form>
                </td><td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <button type="submit" name="masPlatanos" value="masPlatanos"><img src="mas.png"></button>
                        <button type="submit" name="menosPlatanos" value="menosPlatanos"><img src="menos.png"></button>
                        <button type="submit" name="quitarPlatanos" value="quitarPlatanos"><img src="papelera.png"></button>
                    </form>
                </td><td>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
                        <button type="submit" name="masTomates" value="masTomates"><img src="mas.png"></button>
                        <button type="submit" name="menosTomates" value="menosTomates"><img src="menos.png"></button>
                        <button type="submit" name="quitarTomates" value="quitarTomates"><img src="papelera.png"></button>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>
