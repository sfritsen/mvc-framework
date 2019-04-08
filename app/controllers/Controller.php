<?php

class Controller {

    public static function CreateView($viewName) {
        require("./app/views/".$viewName.".php");
    }

}

?>