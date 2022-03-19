<?php
    namespace App;

    class Route{

        public function initRoutes(){

            //Rota Home
            $routes['home'] = array('route' => '/', 
                                    'controller' => 'indexController', 
                                    'action' => 'index');

            //Rota Contato
            $routes['contato'] = array('route' => '/contato', 
                                       'controller' => 'indexController', 
                                       'action' => 'contato');
        }

        //Retorna o PATH acessado pelo usuário
        public function getURL(){
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>