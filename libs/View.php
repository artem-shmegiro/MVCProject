<?php
class View {
    public function __construct(){
        
    }
    
    public function render ($name, $noInclude = false) {
        if ($noInclude == true) {
            require 'views/header_guest.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        } else {
            require 'views/header.php';
            require 'views/'.$name.'.php';
            require 'views/footer.php';
        }
    }
}
?>
