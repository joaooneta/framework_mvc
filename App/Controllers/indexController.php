<?php
    namespace App\Controllers;
    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;

    class IndexController extends Action{

        //Actions teste
        public function index(){
            //$this->view->arrayTeste = array('DadoIndex1', 'DadoIndex2', 'DadosIndex3');

            //Recuperação da instância da conexão
            $conn = Connection::getDb();

            //Instância da classe teste Produto
            $produto = new Produto($conn);

            //Recuperando array de teste
            $produtos = $produto->getProdutos();
            $this->view->arrayTeste = $produtos;

            $this->render('index', 'layouthome');
        }

        public function contato(){
            $this->view->arrayTeste = array('DadosContato1', 'DadosContato2', 'DadosContato3');
            $this->render('contato', 'layoutbase');
        }

    }
?>
