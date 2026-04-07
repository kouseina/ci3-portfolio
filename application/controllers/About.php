<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data = [
            'name' => 'Daffa Putera Kouseina',
            'title' => 'Software Engineer',
            'bio' => 'Long life learner',
            'email' => 'kouseinadaffa@gmail.com',
            'github' => 'https://github.com/kouseina',
            'skills' => ['PHP', 'JavaScript', 'HTML', 'CSS', 'MySQL', 'Laravel']
        ];
        
        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer');
    }
}
