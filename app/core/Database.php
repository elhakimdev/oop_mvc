<?php
/**
 * namespace core\database
 */
class Database
{
    /**
     * Undocumented variable
     *
     * @var [mixed]
     */
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $db_handler;
    private $stmt;

    /**
     * Undocumented function
     */
    public function __construct()
    {
        $ds_n = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
        $option = 
        [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            //code...
            $this->db_handler = new PDO($ds_n,$this->user,$this->pass);
        } catch (PDOException $e) {
            //throw $th;
            die($e-getMessage());
        }
    }

    /**
     * PDO DATABASE Query function
     * @param [mixed] $query
     * @return void
     */
    public function query($query)
    {
        $this->stmt = $this->db_handler->prepare($query);
    }
    
    /**
     * Undocumented function
     *
     * @param [mixed] $param
     * @param [mixed] $value
     * @param [mixed] $type
     * @return void
     */
    public function bind($param,$value,$type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    # code...
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    # code...
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    # code...
                    $type = PDO::PARAM_NULL;
                    break;
                
                default:
                    # code...
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param,$value,$type);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function execute()
    {
        $this->stmt->execute();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function singletSet()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
