<?php
class Registration extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        if (Model::checkuser()) {
            header("Location: ".URL."dashboard");
        } else {
            $this->view->render('registration/index', true);
        }
    }
    
    public function save() {
        $this->model->save();
    }
}
?>
