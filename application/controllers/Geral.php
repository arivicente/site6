<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geral extends CI_Controller {

    public function index(){

        $dados['nomes'] = ['Ari', 'Jorge', 'Sergio'];


/*        $dados = [
            'nome' => 'Ari',
            'idade' => 38
        ]
*/

        $this->load->view('layout/cabecalho');
        $this->load->view('conteudo', $dados);
        $this->load->view('layout/rodape');
    }
}
