<?php

class DbManager {

    //Database configuration
    private $conn;
    private $username = 'fundacja22';
    private $password = 'xsMoT7x9Ye9dJZyA';

    function __construct(){
        //Connecting to MongoDB
        try {
            //Establish database connection
            $this->conn = new MongoDB\Driver\Manager('mongodb+srv://'.$this->username.':'.$this->password.'@fundacja22-questionnair.q0htu.mongodb.net/fundacja22-questionnaire?retryWrites=true&w=majority');
//            $this->conn = new MongoDB\Driver\Manager('mongodb://'.$this->username.':'.$this->password.'@fundacja22-questionnair-shard-00-00.q0htu.mongodb.net:27017,fundacja22-questionnair-shard-00-01.q0htu.mongodb.net:27017,fundacja22-questionnair-shard-00-02.q0htu.mongodb.net:27017/fundacja22-questionnaire?ssl=true&replicaSet=atlas-kzwdjb-shard-0&authSource=admin&retryWrites=true&w=majority');
            echo 'connected correctly';
        }catch (MongoDBDriverExceptionException $e) {
            echo 'aaa'.$e->getMessage();
            echo nl2br("n");
        }
    }

    function getConnection() {
        return $this->conn;
    }

}

?>
