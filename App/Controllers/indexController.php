<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use MF\Model\Container;
    use App\Models\Produto;
    use App\Models\Contato;

    class IndexController extends Action{

        //Action PATH index
        public function index(){
            $produto = Container::getModel('Produto');
            $produtos = $produto->getProdutos();
            $this->view->arrayTeste = $produtos;

            $this->render('index', 'layouthome');
        }

        //Action PATH contato
        public function contato(){
            $contato = Container::getModel('Contato');
            $contatos = $contato->getContatos();
            $this->view->arrayTeste = $contatos;

            $this->render('contato', 'layoutbase');
        }

    }
?>
