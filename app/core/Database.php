<?php

class Database {
    private $dbh,
            $stmt,
            $dbs = DB_SERVER,
            $dbu = DB_USER,
            $dbp = DB_PASS,
            $dbn = DB_NAME;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->dbs . ';dbname=' . $this->dbn;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->dbh = new PDO($dsn, $this->dbu, $this->dbp, $options);
        } catch (PDOException $e) {
            die ($e->getMessage());
        }
    }

    public function query ($params)
    {
        $this->stmt = $this->dbh->prepare($params);
    }
    
    public function bind($param, $value, $type = null) {
        if ( is_null($type) ) {
            switch (true) {
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
    
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute() {
        $this->stmt->execute();
    }

    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount(){
        return $this->stmt->rowCount();
    }


}

?>