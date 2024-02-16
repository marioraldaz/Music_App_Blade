<?php
    namespace Mario\Examen;
    use PDO;
    use PDOException;
    Class Cancion extends DBConnection{
        public $titulo;
        public $idgenero;
        public $idinterprete;

        public function __construct($titulo, $idgenero, $idinterprete){
            $this->titulo = $titulo;
            $this->idgenero = $idgenero;
            $this->idinterprete = $idinterprete;
            parent::getConnection();
        }

        public function insert(){
            $query = "INSERT INTO cancion (titulo, idgenero, idinterprete) values ( :titulo, :idgenero, :idinterprete)";
            $statement = DBConnection::$connection->prepare($query);
            $statement->bindParam(":titulo",$this->titulo);
            $statement->bindParam(":idgenero",$this->idgenero);
            $statement->bindParam(":idinterprete",$this->idinterprete);
            $success=$statement->execute();
            if ($success) {
                echo "Cancion inserted successfully.";
            } else {
                echo "Error inserting Cancion: " . implode(" ", $statement->errorInfo());
            }
        }
    }