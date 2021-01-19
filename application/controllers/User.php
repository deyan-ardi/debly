<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $ip = $this->input->ip_address();
        $sql = $this->All_model->getAllLinkWhereIP($ip);
        foreach ($sql as $data) {
            $cek_status = date_diff(date_create(), date_create($data['create_date']));
            if ($cek_status->i > 1 && $data['akses'] == 0) {
                $this->All_model->changeStatus($data['new_url']);
            }
            // Jika sudah lebih dari 3 hari, maka history akan diset off
            if ($cek_status->i >= 2 && $data['akses'] == 0) {
                $this->All_model->changeHistory($data['new_url']);
                $cookie_1 = "url-1";
                $expire = time() - 1;
                setcookie($cookie_1, "", $expire);
            }
        }
    }

    public function index()
    {
        if ($this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('user/dashboard', 'refresh');
        } else {
            $this->data['title'] = "Deb.ly - Persingkat Tautan & Kustomisasi Tautan";
            $this->data['id'] = 1;
            $this->data['total'] = $this->All_model->getTotalTautan();
            $this->load->view("master/header", $this->data);
            $this->load->view("user/index", $this->data);
            $this->load->view("master/footer", $this->data);
        }
    }

    public function singkat()
    {
        if ($this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('user/dashboard', 'refresh');
        } else {
            $this->data['title'] = "Deb.ly - Memproses Permintaan | Persingkat Tautan & Kustomisasi Tautan ";
            $this->data['id'] = 0;
            $this->data['data'] = json_decode(get_cookie("url-1"), true);
            $ip = $this->input->ip_address();
            if (isset($_POST["submit"]) && !empty($_POST["weburl"])) {
                if (!filter_var($_POST['weburl'], FILTER_VALIDATE_URL) === false) {
                    $string = "012345678bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
                    $new_link = "https://debly.cc/" . substr(str_shuffle($string), 0, 6);
                    $new_link = $this->encryption->encrypt($new_link);
                    $old_link = $this->encryption->encrypt($_POST["weburl"]);
                    $date = date('Y-m-d H:i:s');
                    // jika ternyata random number itu sama nilaianya
                    if (!empty($this->All_model->getAllLinks($new_link))) {
                        $new_link = "https://debly.cc/" . substr(str_shuffle($string), 0, 6);
                        $new_link = $this->encryption->encrypt($new_link);
                    }
                    // input data
                    if ($this->All_model->inputDataLinks($new_link, $old_link, $date, $ip)) {
                        $sql = $this->All_model->getAllLinkWhere($ip);
                        $cookie_1 = "url-1";
                        // Cookie berlaku selama 2 hari
                        $expire = time() + 172800;
                        setcookie($cookie_1, json_encode($sql), $expire);
                        redirect("singkat");
                    } else {
                        echo "Kegagalan Sistem, Silahkan Ulangi Lagi";
                    }
                } else {
                    echo "Bukan URL Yang Valid";
                }
            } else {
                $this->load->view("master/header", $this->data);
                $this->load->view("user/singkat", $this->data);
                $this->load->view("master/footer", $this->data);
            }
        }
    }

    // Administrator

    public function tautan()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $this->data['title'] = "Deb.ly - Profil Pengguna | Persingkat Tautan & Kustomisasi Tautan";
            $this->data['id'] = 0;
            $this->data['nav'] = 2;
            // pagination
            $jml_data = $this->All_model->getLinkWhereUser($_SESSION['user_id']);
            $config['base_url'] = base_url() . 'user/tautan';
            $config['total_rows'] = $jml_data;
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $this->data['histori'] = $this->All_model->finalDataHistori($config['per_page'], $from, $_SESSION['user_id']);
            // end pagination
            $this->data['group'] = $this->All_model->getUserLogin($_SESSION['user_id']);
            $this->load->view("master/dash-header", $this->data);
            $this->load->view("user/tautan-pro", $this->data);
            $this->load->view("master/dash-footer", $this->data);
        }
    }
    public function result_tautan()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $this->data['title'] = "Deb.ly - Hasil Tautan| Persingkat Tautan & Kustomisasi Tautan";
            $this->data['id'] = 0;
            $this->data['nav'] = 2;
            $group = $this->All_model->getUserLogin($_SESSION['user_id']);
            $this->data['group'] = $group;
            $ip = $this->input->ip_address();
            // pagination
            $jml_data = $this->All_model->getLinkWhereUser($_SESSION['user_id']);
            $config['base_url'] = base_url() . 'user/result_tautan';
            $config['total_rows'] = $jml_data;
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $this->data['histori'] = $this->All_model->finalDataHistori($config['per_page'], $from, $_SESSION['user_id']);
            // end pagination
            if (!empty($_POST["data1"])) {
                if (!filter_var($_POST['data1'], FILTER_VALIDATE_URL) === false) {
                    $string = "012345678bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";
                    $new_link = "https://debly.cc/" . substr(str_shuffle($string), 0, 6);
                    $new_link = $this->encryption->encrypt($new_link);
                    $old_link = $this->encryption->encrypt($_POST["data1"]);
                    $date = date('Y-m-d H:i:s');
                    // jika ternyata random number itu sama nilaianya
                    if (!empty($this->All_model->getAllLinks($new_link))) {
                        $new_link = "https://debly.cc/" . substr(str_shuffle($string), 0, 6);
                        $new_link = $this->encryption->encrypt($new_link);
                    }
                    // input data
                    if ($this->All_model->inputDataLinksUser($new_link, $old_link, $date, $ip, $group[0]['id'])) {
                        $this->data['links'] = $this->All_model->getAllLinkWhereUser($group[0]['id']);
                        $this->load->view("user/result-pro", $this->data);
                    } else {
                        $this->data['id_info'] = true;
                        $this->data['info'] = "Terjadi Kegagalan Pada Sistem, Silahkan Hubungi Operator Website";
                        $this->load->view("user/alert-pro", $this->data);
                    }
                } else {
                    $this->data['id_info'] = true;
                    $this->data['info'] = "Tautan Yang Anda Masukkan Tidak Valid, Silahkan Masukkan Kembali Tautan Anda";
                    $this->load->view("user/alert-pro", $this->data);
                }
            }
        }
    }
    public function kustom_tautan()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $group = $this->All_model->getUserLogin($_SESSION['user_id']);
            $this->data['group'] = $group;
            $data = str_replace(' ', '', $_POST['url_custom']);
            $data = "https://debly.cc/" . $data;
            $sql = $this->All_model->getAll();
            // pagination
            $jml_data = $this->All_model->getLinkWhereUser($_SESSION['user_id']);
            $config['base_url'] = base_url() . 'user/kustom_tautan';
            $config['total_rows'] = $jml_data;
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $this->data['histori'] = $this->All_model->finalDataHistori($config['per_page'], $from, $_SESSION['user_id']);
            // end pagination
            foreach ($sql as $link) {
                if (strcmp($this->encryption->decrypt($link['new_url']), $data) == 0) {
                    $this->data['info'] = "Tautan Sudah Digunakan, Gunakan Kata Lain";
                    $this->data['id_info'] = true;
                    $this->load->view("user/alert-pro", $this->data);
                }
            }
        }
    }
    public function proses_kustom_tautan()
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            $group = $this->All_model->getUserLogin($_SESSION['user_id']);
            $this->data['group'] = $group;
            $data = str_replace(' ', '', $_POST['url_custom']);
            $data = "https://debly.cc/" . $data;
            // pagination
            $jml_data = $this->All_model->getLinkWhereUser($_SESSION['user_id']);
            $config['base_url'] = base_url() . 'user/result_tautan';
            $config['total_rows'] = $jml_data;
            $config['per_page'] = 5;
            $config['num_links'] = 2;
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);
            $this->data['histori'] = $this->All_model->finalDataHistori($config['per_page'], $from, $_SESSION['user_id']);
            // end pagination
            if ($this->All_model->updateLinkCustom($this->encryption->encrypt($data), $_POST['id_url'])) {
                redirect("user/tautan");
            }
        }
    }
    public function copy($data = "")
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            if (empty($data)) {
                redirect('user/tautan', 'refresh');
            } else {
                $this->data['title'] = "Deb.ly - Salin Tautan| Persingkat Tautan & Kustomisasi Tautan";
                $this->data['id'] = 0;
                $this->data['nav'] = 2;
                $id_link = base64_decode($data);
                $this->data['data_link'] = $this->All_model->getOnlyOne($id_link);
                $this->data['group'] = $this->All_model->getUserLogin($_SESSION['user_id']);
                $this->load->view("master/dash-header", $this->data);
                $this->load->view("user/copy-pro", $this->data);
                $this->load->view("master/dash-footer", $this->data);
            }
        }
    }
    public function hapus($data = "")
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            if (empty($data)) {
                redirect('user/tautan', 'refresh');
            } else {
                $id_link = base64_decode($data);
                if ($this->All_model->changeStatusPro($id_link)) {
                    redirect('user/tautan', 'refresh');
                }
            }
        }
    }

    public function ubah($data = "")
    {
        if (!$this->ion_auth->logged_in()) {
            // redirect them to the login page
            redirect('login', 'refresh');
        } else {
            if (empty($data)) {
                redirect('user/tautan', 'refresh');
            } else {
                $this->data['title'] = "Deb.ly - Ubah Tautan| Persingkat Tautan & Kustomisasi Tautan";
                $this->data['id'] = 0;
                $this->data['nav'] = 2;
                $id_link = base64_decode($data);
                $this->form_validation->set_rules('old', 'Old', 'valid_url');
                if ($this->form_validation->run() === FALSE) {
                    $this->data['data_link'] = $this->All_model->getOnlyOne($id_link);
                    $this->data['group'] = $this->All_model->getUserLogin($_SESSION['user_id']);
                    $this->load->view("master/dash-header", $this->data);
                    $this->load->view("user/ubah-pro", $this->data);
                    $this->load->view("master/dash-footer", $this->data);
                } else {
                    if (!empty($_POST['old'])) {
                        if (!filter_var($_POST['old'], FILTER_VALIDATE_URL) === false) {
                            $enkrip = $this->encryption->encrypt($_POST['old']);
                            if ($this->All_model->updateLinkOld($enkrip, $_POST['id_url'])) {
                                redirect('user/tautan', 'refresh');
                            } else {
                                echo "Error";
                            }
                        }
                    }
                    if (!empty($_POST['new'])) {
                        $data = str_replace(' ', '', $_POST['new']);
                        $data = "https://debly.cc/" . $data;
                        $enkrip = $this->encryption->encrypt($data);
                        if ($this->All_model->updateLinkNew($enkrip, $_POST['id_url'])) {
                            redirect('user/tautan', 'refresh');
                        } else {
                            echo "Error";
                        }
                    }
                }
            }
        }
    }
}