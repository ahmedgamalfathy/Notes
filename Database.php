<?php
class Database{
    public $connection;
    public $statement;
    public function __construct($config,$username='root',$password=''){
         $dsn = 'mysql:'. http_build_query($config,'',';');
        // $dsn = 'mysql:dbname=myapp;host=127.0.0.1;port=3306';
        $this->connection = new PDO($dsn,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        ]);
    }
    public function query($query,$params=[])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);
        return $this;
    }
    public function all(){
        return $this->statement->fetchAll();
    }
    public function find(){
        return $this->statement->fetch();
    }
    public function findOrFail(){
        $result = $this->find();
        if(! $result){
            abort();
        }
        return $result;
    }
}