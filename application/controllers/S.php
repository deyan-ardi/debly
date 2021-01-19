<?php
defined('BASEPATH') or exit('No direct script access allowed');

class S extends CI_Controller
{
    public function index($data = "")
    {
        $new_data = "https://debly.cc/" . $data;
        $sql = $this->All_model->getAll();
        foreach ($sql as $data) {
            if ($this->encryption->decrypt($data['new_url']) == $new_data) {
                $cek_status = date_diff(date_create(), date_create($data['create_date']));
                if ($cek_status->d > 90 && $data['akses'] == 0) {
                    $this->All_model->changeStatus($data['new_url']);
                    show_404();
                } else {
                    if ($data['status'] == 1) {
                        redirect($this->encryption->decrypt($data['url_old']));
                    }
                }
            }
        }
        show_404();
    }
}