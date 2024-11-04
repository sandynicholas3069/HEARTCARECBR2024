<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Symptoms extends CI_Controller {
    public function index() {
        $this->load->view('layout/header');
        $this->load->view('symptoms');
        $this->load->view('layout/footer');
    }
}