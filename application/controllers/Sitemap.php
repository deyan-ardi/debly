<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends CI_Controller
{
    public function index()
    {
        $this->load->view('sitemap');
    }
}