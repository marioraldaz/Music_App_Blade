<?php
    namespace Mario\Examen;
    use PDO;
    use PDOException;
    Class Genero extends DBConnection{
        public $nombre;

        public function __construct($nombre){
            $this->nombre=$nombre;
            parent::getConnection();
        }

        public function insert(){
            $query = "INSERT INTO genero (nombre) VALUES (:nombre)";
            $statement = DBConnection::$connection->prepare($query);
            $statement->bindParam(':nombre', $this->nombre);
            $success=$statement->execute(); 
            echo "check".$success;
            if ($success) {
                echo "Género insertado.";
            } else {
                echo "Error en insercion de género" ;
            }
        }

        public static function getGeneros(){
            $query = "SELECT * FROM genero";
            $statement = DBConnection::$connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
    }