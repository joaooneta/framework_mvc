<?php

    namespace MF\Controller;
    
    abstract class Action{
        protected $view;

        //Função construtora responsável por tornar possível armazenar dados em um objeto vazio acessável pela view
        public function __construct(){
            $this->view = new  \stdClass();
        }

        //Requisição da View pelo controller a partir do arquivo index.php
        protected function render($view){
            //Encontrando dinamicamente o diretório da view solicitado pelo controller
            $controller = get_class($this);
            $controller = str_replace('App\\Controllers\\', '', $controller);
            $controller = str_replace('Controller', '', $controller);
            $controller = strtolower($controller);

            require_once "../App/Views/" .$controller. "/" .$view. ".phtml";
        }
        
    }

?>