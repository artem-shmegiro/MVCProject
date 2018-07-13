<?php
class History extends Controller {
    public function __construct() {
        parent::__construct();
        Session::init();
        //$this->model->output();
    }
    
    public function index() {
        if (Model::checkuser()) {
            $this->view->render('history/index');
        } else {
            header("Location: ".URL."login");
        }
    }
}
?>
