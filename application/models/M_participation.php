<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_participation extends CI_Model {

    public function __construct() {

        // OBLIGATOIRE
        parent::__construct();

        // On créé la connexion à la base de données
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('text');
        $this->load->library('form_validation');
    }






}


?>