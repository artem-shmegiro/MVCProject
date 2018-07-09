<?php
class DB 
{
    protected $connection;
    protected $host='localhost';
    protected $user='userregs'; 
    protected $password='2408';
    protected $db_name='register';
    
    public function __construct() {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        
        if( !$this->connection ) {
         throw new Exception('Could not connect to DB ');
        }
     
    }
    
    public function insert($table, $values, $rows = null) {
        $insert = 'INSERT INTO '.$table;
        if($rows != null) {
            $insert .= ' ('.$rows.')';
        }
        for ($i = 0; $i < count($values); $i++) {
            if(is_string($values[$i])) $values[$i] = '"'.$values[$i].'"';
        }
        $values = implode(',',$values);
        $insert .= ' VALUES ('.$values.')';
        $result = mysqli_query($this->connection, $insert);
        if ( mysqli_error($this->connection) ){
            throw new Exception(mysqli_error($this->connection));
        }
        return ($result) ? true : false;
        
    }
    
    public function select($what,$from,$where = null,$order = null) {
        $select = 'SELECT '.$what.' FROM '.$from;
        if($where != null) $select .= ' WHERE '.$where;
        if($order != null) $select .= ' ORDER BY '.$order;
        $query = mysqli_query($this->connection, $select);
        if ( mysqli_error($this->connection) ){
            throw new Exception(mysqli_error($this->connection));
        }
        $result = array();
        while( $row = mysqli_fetch_assoc($query) ){
            $result[] = $row;
        }
        return $result;
    }
    
    public function create($table) {
        $create = 'CREATE TABLE '.$table;
    }
    
    public function multiupdate($table, $values, $rows = null) {
        
    }
    
    public function __destruct() {
        if($this->connection) $this->connection->close();
    }
    
}
?>