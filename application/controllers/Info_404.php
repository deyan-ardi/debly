<?php defined('BASEPATH') or exit('No direct script access allowed');

class Info_404 extends CI_Controller
{
    public function index()
    {
        $this->data['title'] = "Deb.ly - Persingkat Tautan & Kustomisasi Tautan";
        $this->data['id'] = 0;
        $this->load->view("master/header", $this->data);
        $this->load->view('404/index', $this->data);
        $this->load->view("master/footer", $this->data);
    }
}