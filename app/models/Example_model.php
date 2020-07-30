<?php
/**
 * Undocumented class
 */
class Example_model
{
    /**
     * Undocumented variable
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
       $this->database->query(' SELECT * FORM ' . $this->table);
       return $this->database->resultSet();
    }
}
