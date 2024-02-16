<?php
    require '../vendor/autoload.php';
    use Mario\Examen\DBConnection;
    use Mario\Examen\Genero;
    use Philo\Blade\Blade;

    DBConnection::getConnection();
    $views = '../views';
    $cache = '../cache';
    $blade = new Blade($views, $cache);
    
    echo $blade->view()->make('viewInsertarGenero');
    if(isset($_POST['submit'])){
        $genero = new Genero($_POST['nombre']);
        $genero->insert();
    }
    
 