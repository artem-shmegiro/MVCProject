<?php
class Registration extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->view->render('registration/index');
    }
    
    public function save() {
        $this->model->save();
    }
}
?>
