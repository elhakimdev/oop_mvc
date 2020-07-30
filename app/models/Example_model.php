<?php
/**
 * Undocumented class
 */
class Example_model
{
    /**
     * $table variable as a database table, you can change for any table in any model 
     *
     * @var string 'tabel name'
     */
    private $table = 'tb_user';
    private $database;

    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->database = new Database;
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getAllUser(){
       $this->database->query('SELECT * FROM ' . $this->table);
       return $this->database->resultSet();
    }
}
