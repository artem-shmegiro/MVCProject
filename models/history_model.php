<?php 
class History_Model extends Model {
    public function __construct() {
        try {
            $db = new DB;
            $result = $db->select("*","calculdb");
            $i = 0 ;
            echo '<div class="parent"> <div class="history">';
            do {
                printf("<p>Operation " .$result[$i][id] . " : " .$result[$i][fnumber] . " " .$result[$i][operation] . " " .$result[$i][snumber] . " = " .$result[$i][result] . "</p>------------------------------------------------------------<br/>");
                $i++;
            } while($i<count($result));
            echo '</div> </div>';
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    /*public function output() {
        try {
            $db = new DB;
            $result = $db->select("*","calculdb");
            $i = 0 ;
            do {
                printf("<p>Operation " .$result[$i][id] . " : " .$result[$i][fnumber] . " " .$result[$i][operation] . " " .$result[$i][snumber] . " = " .$result[$i][result] . "</p>---------------------------------------------------------------<br/>");
                $i++;
            } while($i<count($result));
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }*/
    
}
?>
