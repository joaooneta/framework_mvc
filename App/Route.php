<?php
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap{
        
        //Método responsável por definir as rotas do sistema
        protected function initRoutes(){

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

    }
?>