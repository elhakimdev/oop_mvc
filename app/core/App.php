<?php
/**
 * This class is parent of this app
 * App will be call index.php on root directory
 * then, require init.php
 * init.php containts any dependency file to autoload while this app accesed by user
 * 
 * @author Elhakim
 * @version 1.0
 */
class App
{
    /**
     * a default property of controller instance
     * set to default base controller
     * you can change value of property by any your need default values
     */
    protected $controller = "Home";
    /**
     * a default property of methode instance
     * set to default base methode
     * you can change value of property by any your need default values
     */
    protected $method = "index";
    /**
     * param set to default = null 
     */
    protected $params = [];

    public function __Construct()
    {
        $url = $this->parseURL();

        // SETUP CONTROLLER
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // SETUP METHODE
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // SETUP PARAMS
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // CALL CONTROLLER
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
