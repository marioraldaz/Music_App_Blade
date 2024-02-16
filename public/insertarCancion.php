<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Cancion</title>
</head>

<body>
    <?php
        require '../vendor/autoload.php';
        use Mario\Examen\DBConnection;
        use Philo\Blade\Blade;

        DBConnection::getConnection();
        $views = '../views';
        $cache = '../cache';
        $blade = new Blade($views, $cache);
        
        echo $blade->view()->make('viewInsertarCancion')
    ?>
</body>

</html>