    <?php
        require '../vendor/autoload.php';
        use Mario\Examen\DBConnection;
        use Mario\Examen\Cancion;
        use Mario\Examen\Genero;
        use Mario\Examen\Interprete;

        use Philo\Blade\Blade;

        DBConnection::getConnection();
        $views = '../views';
        $cache = '../cache';
        $blade = new Blade($views, $cache);
        $generos = Genero::getGeneros();
        $interpretes = Interprete::getInterpretes();
        echo $blade->view()->make('viewInsertarCancion',['generos'=>$generos,'interpretes'=>$interpretes]);
        
        if(isset($_POST['submit'])){

            $cancion = new Cancion($_POST['titulo'], $_POST['idgenero'], $_POST['idinterprete']);
            $cancion->insert();
        }