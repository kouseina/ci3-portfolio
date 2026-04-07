<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $data = [
            'name' => 'Daffa Putera Kouseina',
            'title' => 'Software Engineer',
            'email' => 'kouseinadaffa@gmail.com',
            'github' => 'https://github.com/kouseina'
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/contact', $data);
        $this->load->view('templates/footer');
    }
}
