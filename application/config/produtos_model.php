<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Produtos_model extends CI_Model {
        
        public function __construct(){
            parent::__construct();
        }
        
        public function lista_produtos() {
            return $this -> db -> get('produtos') -> result();
        }
    }
?>