<?php
class Login extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if ($this->model->checkuser()) {
            header("Location: http://localhost/mvcproject/dashboard");
            //$this->view->render('dashboard/index');
        } else {
            $this->view->render('login/index', true);
        }
    }
    
    public function run() {
        $this->model->run();
    }
}
?>
