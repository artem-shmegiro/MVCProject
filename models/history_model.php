<?php 
class History_Model extends Model {
    public function __construct() {
        
    }
    
    public function output() {
        try {
            $db = new DB;
            $result = $db->select("*","calculdb");
            echo'<pre>';
            print_r($result);
            echo'</pre>';     
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}
?>
