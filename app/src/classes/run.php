<?php

/**
 * Description of run
 *
 * Created by
 * @author Andrii Molchanov <andymolchanov@gmail.com>
 * Date 20 сент. 2022 г.
 */

namespace src\classes;

class run {

    public $controller;
    public $action;
    private $route;

    public function __construct()
    {
        $this->route = explode('/', $_SERVER['REQUEST_URI']);
    }

    public function getControllerAction()
    {
        $this->controller = $this->route[1];
        $this->action = $this->route[2];
        return $this;
    }

}
