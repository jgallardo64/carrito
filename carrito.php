<?php
session_start();
$_SESSION['final'] = time();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="escaparate.php"><img src="escaparate.png" width="30px"></a>
        
        <?php
        if (!isset($_COOKIE['inicio'])) {
            setcookie('inicio', $_SESSION['final'], time() + 600);
        } else {
            echo 'Tiempo desde inicio sesion: ' . ($_SESSION['final'] - $_COOKIE['inicio'] . ' segundos');
        }
        ?>
        
        <h1>Tu carrito de la compra</h1>
        
        <table style="text-align: center; font-size:20px">
            <tr>
                <td colspan="2">Articulo</td>
            <td>Cantidad</td>
            </tr>
        <?php
        
        if ($_SESSION['arroz']>0) {
            echo '<tr>
                <td><img src="arroz.png" width="70px"></td>
                <td>Arroz Dacsa</td>
                <td>'.$_SESSION['arroz'].' unidades</td>
                </tr>';
        }
        
        if ($_SESSION['macarrones']>0) {
            echo '<tr>
                <td><img src="macarrones.png" width="70px"></td>
                <td>Macarrones Penne</td>
                <td>'.$_SESSION['macarrones'].' unidades</td>
                </tr>';
        }
        
        if ($_SESSION['platanos']>0) {
            echo '<tr>
                <td><img src="platanos.png" width="70px"></td>
                <td>Platanos de canarias</td>
                <td>'.$_SESSION['platanos'].' unidades</td>
                </tr>';
        }
        
        if ($_SESSION['tomates']>0) {
            echo '<tr>
                <td><img src="tomates.png" width="70px"></td>
                <td>Tomates Raf</td>
                <td>'.$_SESSION['tomates'].' unidades</td>
                </tr>';
        }
        ?>
            </table>
    </body>
</html>
