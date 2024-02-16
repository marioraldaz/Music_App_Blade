<?php
    require '../vendor/autoload.php';
    use Mario\Examen\DBConnection;
    use Mario\Examen\Interprete;
    use Philo\Blade\Blade;

    DBConnection::getConnection();
    $views = '../views';
    $cache = '../cache';
    $blade = new Blade($views, $cache);
    echo $blade->view()->make('viewInsertarInterprete');
    if(isset($_POST['submit'])){
        $interprete = new Interprete($_POST['nombre']);
        $interprete->insert();
    }
    
 