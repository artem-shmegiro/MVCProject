<?php
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if (Model::checkuser()) {
            header("Location: http://localhost/mvcproject/dashboard");
        } else {
            $this->view->render('login/index', true);
        }
    }
    
    public function run() {
        $this->model->run();
    }
}
?>
