<?php
    namespace App\Controllers;
    use MF\Controller\Action;

    class IndexController extends Action{

        //Actions teste
        public function index(){
            $this->view->arrayTeste = array('DadoIndex1', 'DadoIndex2', 'DadosIndex3');
            $this->render('index');
        }

        public function contato(){
            $this->view->arrayTeste = array('DadosContato1', 'DadosContato2', 'DadosContato3');
            $this->render('contato');
        }

    }
?>
