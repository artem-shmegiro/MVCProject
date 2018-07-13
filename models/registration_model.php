<?php 
class Registration_Model extends Model {
    public function __construct() {
        
    }
    
    public function save() {
        $login = $_POST['login'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        //remove spaces
        $login = trim($login);
        $email = trim($email);
        $password = trim($password);
        //password hashing
        $password = password_hash($password, PASSWORD_DEFAULT);
        try {
            $db = new DB;
            //user validation
            $data = $db->select("id","userreg","login='$login'");
            if (!empty($data)) {
            exit ("Sorry, login exists!");
            }
            //if OK, save user
            $check = $db->insert('userreg', array('NULL',$login,$email,$password));
            if(check){
                header('Location: ../login');
                //echo 'You have successfully registered!';
            } else {
                header('Location: ../registration');
                //echo "Error! You are not registered!";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}
?>
