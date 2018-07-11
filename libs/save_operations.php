<?php
//include_once('libs/Database.php');
//if(isset($_POST['first']) && isset($_POST['second'])){
$first = $_POST['first'];
$second = $_POST['second'];
$operation = $_POST['operation'];  
$result = $_POST['result'];
    /*try {
        $db = new DB;
        $db->insert('calculdb', array('NULL',$first,$second,$operation,$result));
    } catch (Exception $e) {
        echo $e->getMessage();
    }*/

$connection = new mysqli('localhost', 'userregs', '2408', 'register');

$result = mysqli_query($connection, "INSERT INTO calculdb VALUES('NULL','$first','$operation','$second','$result')");
    
?>
