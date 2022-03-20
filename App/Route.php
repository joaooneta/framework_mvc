<?php
    namespace App;

    class Route{
        //Array que armazena as rotas
        private $routes;

        //Função construtora que inicia as rotas, além de iniciar o método run() responsável por encaminhar o PATH ao controller correspondente
        public function __construct(){
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        //GET & SET
        public function getRoutes(){
            return $this->routes;
        }

        public function setRoutes(array $routes){
            $this->routes = $routes;
        }

        //Método responsável por definir as rotas do sistema
        public function initRoutes(){

            //Rota Home
            $routes['home'] = array('route' => '/', 
                                    'controller' => 'indexController', 
                                    'action' => 'index');

            //Rota Contato
            $routes['contato'] = array('route' => '/contato', 
                                       'controller' => 'indexController', 
                                       'action' => 'contato');

            $this->setRoutes($routes);
        }

        //Identifica o PATH acessado pelo usuário e gera dinamicamente o controller responsável pela página
        public function run($url){
            foreach($this->getRoutes() as $key => $route){
                if($url == $route['route']){
                    $class = "App\\Controllers\\" . ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        //Retorna o PATH acessado pelo usuário
        public function getURL(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>