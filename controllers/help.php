<?php
class Help extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function other($arg = false) {
        echo "Мы в методе other контроллера Help";
        echo "Параметры: ".$arg;
        require 'models/help_model.php';
        $model = new Help_Model();
    }
    
    public function index() {
        if ($this->model->checkuser()) {
            $this->view->render('help/index');
        } else {
            header("Location: http://localhost/mvcproject/login");
            //$this->view->render('login/index', true);
        }
    }
}
?>
