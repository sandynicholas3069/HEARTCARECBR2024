<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnoses extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Diagnose_model');
    }

    public function index() {
        $data['diagnoses'] = $this->Diagnose_model->get_all();
        $this->load->view('layout/header');
        $this->load->view('diagnoses', $data);
        $this->load->view('layout/footer');
    }
}
