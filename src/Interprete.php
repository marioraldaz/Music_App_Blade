<?php
    namespace Mario\Examen;
    use PDO;
    use PDOException;
    Class Interprete extends DBConnection{
        public $nombre;

        public function __construct($nombre){
            $this->nombre=$nombre;
            parent::getConnection();
        }

        public function insert(){
            $query = "INSERT INTO interprete (nombre) VALUES (:nombre)";
            $statement = DBConnection::$connection->prepare($query);
            $statement->bindParam(':nombre', $this->nombre);
            $success=$statement->execute(); 
            echo "check".$success;
            if ($success) {
                echo "Intérprete insertado.";
            } else {
                echo "Error en insercion de Intérprete" ;
            }
        }

        public static function getInterpretes(){
            $query = "SELECT * FROM interprete";
            $statement = DBConnection::$connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            return $result;
        }
    }