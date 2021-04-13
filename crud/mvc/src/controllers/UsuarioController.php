<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends Controller {

    public function adicionar() {
        $this->render('adicionar');
    }



    public function adicionarAction(){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            $dados = Usuario::select()->where('email', $email)->execute();
            
            if(count($dados) === 0){
             Usuario::insert([
                 'nome' => $nome,
                 'email' => $email
             ])->execute();          
             
            $this->redirect('/');

            }
        }
        $this->redirect('/adicionar');
    }




    public function editar($args){
        $usuario = Usuario::select()->where('id', $args)->one();
        //$usuario = Usuario::select()->find($args['id']);
        
        $this->render('editar', [
            'usuario' => $usuario
        ]);
        
    }




    public function editarAction($args){
        $nome = filter_input(INPUT_POST, 'nome');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            Usuario::update()->where('id', $args)
                ->set('nome', $nome)
                ->set('email', $email)
            ->execute();

            $this->redirect('/');
        }else{
            $this->redirect('/usuario/'.$args.'/editar');
        }

        
    }




    public function excluir($args){
        Usuario::delete()->where('id', $args)->execute();

        $this->redirect('/');
    }

}
    


