<?php
    namespace App\Controllers;

    class IndexController{

        private $view;

        //Função construtora responsável por tornar possível armazenar dados em um objeto vazio acessável pela view
        public function __construct(){
            $this->view = new  \stdClass();
        }

        //Actions teste
        public function index(){
            $this->view->arrayTeste = array('DadoIndex1', 'DadoIndex2', 'DadosIndex3');
            $this->render('index');
        }

        public function contato(){
            $this->view->arrayTeste = array('DadosContato1', 'DadosContato2', 'DadosContato3');
            $this->render('contato');
        }

        //Requisição da View pelo controller a partir do arquivo index.php
        public function render($view){
            //Encontrando dinamicamente o diretório da view solicitado pelo controller
            $controller = get_class($this);
            $controller = str_replace('App\\Controllers\\', '', $controller);
            $controller = str_replace('Controller', '', $controller);
            $controller = strtolower($controller);

            require_once "../App/Views/" .$controller. "/" .$view. ".phtml";
        }
    }
?>
