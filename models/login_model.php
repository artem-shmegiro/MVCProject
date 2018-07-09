<?php
class Login_Model extends Model {
    public function __construct() {
        
    }
    
    public function run() {
        $login = $_POST['login'];
        $password = $_POST['password'];
        //remove spaces
        $login = trim($login);
        $password = trim($password);
        try {
            $db = new DB;
            $data = $db->select("id", "userreg", "login='$login' AND password='$password'" );
            if(empty($data)) {
                 header('Location: ../login');
            } else {
                Session::init();
                Session::set('loggedIn', true);
                header('Location: ../dashboard');       
                if ($_POST['save'] == 1) {
                    setcookie("login", $_POST["login"], time()+(7 * 24 * 60 * 60), "/");
                    setcookie("password", $_POST["password"], time()+(7 * 24 * 60 * 60), "/");
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
?>
