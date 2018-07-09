<?php
class Index extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if ($this->model->checkuser()) {
            $this->view->render('index/index');
        } else {
            header("Location: http://localhost/mvcproject/login");
            //$this->view->render('login/index', true);
        }
    }
}
?>
