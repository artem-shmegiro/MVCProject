<?php
class Model {
    public function __construct() {
        
    }
    
    public function checkuser() {
        if (!isset($_SESSION['user_id'])) {
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                $login = $_COOKIE['login'];
                $password = $_COOKIE['password'];
                //remove spaces
                $login = trim($login);
                $password = trim($password);
                try {
                    $db = new DB;
                    $data = $db->select("id", "userreg", "login='$login' AND password='$password'" );
                    if(empty($data)) {
                        return false;
                    } else {
                        Session::init();
                        Session::set('loggedIn', true);
                        return true;
                    }
                } catch (Exception $e) {
                    echo $e->getMessage();
                }
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}
?>
