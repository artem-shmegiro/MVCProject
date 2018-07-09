<?php
class Dashboard extends Controller {
    public function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: ../login');
            exit();
        }
    }
    
    public function logout() {
        Session::destroy();
        header('Location: ../login');
        setcookie("login", "", time()-1, "/");
        setcookie("password", "", time()-1, "/");
        exit();
    }
    
    public function index() {
        if ($this->model->checkuser()) {
            $this->view->render('dashboard/index');
        } else {
            header("Location: http://localhost/mvcproject/login");
        }
    }
}
?>
