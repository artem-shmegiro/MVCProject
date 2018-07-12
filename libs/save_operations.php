<?php
include_once('Database.php');
if(isset($_POST['first']) && isset($_POST['second'])){
$first = $_POST['first'];
$second = $_POST['second'];
$operation = $_POST['operation'];  
$result = $_POST['result'];
    try {
        $db = new DB;
        $db->insert('calculdb', array('NULL',$first,$operation,$second,$result));
    } catch (Exception $e) {
        echo $e->getMessage();
    }    
}
?>
