<?php

defined('BASEPATH') or exit('No direct script access allowed');

class All_model extends CI_Model{
    public function getAllLinks($data){
        return $this->db->where('new_url ='. "'$data'")->get('links')->result_array();
    }
    public function getAllLinkWhere($data)
    {
        return $this->db->where('ip_address =' . "'$data'")->where('status =' . 1)->where('histori =' . 1)->order_by('create_date','DESC')->limit(3)->get('links')->result_array();
    }
    public function getAllLinkWhereIP($data)
    {
        return $this->db->where('ip_address =' . "'$data'")->get('links')->result_array();
    }
    public function getAllLinkWhereUser($data)
    {
        return $this->db->where('create_by =' . $data)->order_by('create_date', 'DESC')->limit(1)->get('links')->result_array();
    }
    public function getLinkWhereUser($data)
    {
        return $this->db->where('create_by =' . $data)->order_by('create_date', 'DESC')->get('links')->num_rows();
    }
    public function finalDataHistori($number, $offset, $data){
        return $this->db->where('create_by =' . $data)->order_by('create_date', 'DESC')->get('links',$number,$offset)->result_array();
    }
    public function getOnlyOne($data){
        return $this->db->where('id =' . $data)->get('links')->result_array();
    }
    public function inputDataLinks($new_url, $old_url, $date, $ip){
        $query = [
            "ip_address" => $ip,
            "url_old" => $old_url,
            "new_url" => $new_url,
            "create_date" => $date,
        ];
        return $this->db->insert('links', $query);
    }
    public function inputDataLinksUser($new_url, $old_url, $date, $ip, $id_user)
    {
        $query = [
            "ip_address" => $ip,
            "url_old" => $old_url,
            "new_url" => $new_url,
            "create_date" => $date,
            "akses" => 1,
            "create_by" => $id_user,
        ];
        return $this->db->insert('links', $query);
    }
    public function changeStatus($data){
        $query = [
            "status" => 0,
        ];
        return $this->db->where("new_url =" . "'$data'")->update('links', $query);
    }
    public function changeStatusPro($data)
    {
        $query = [
            "status" => 0,
        ];
        return $this->db->where("id =" . $data)->update('links', $query);
    }
    public function updateLinkOld($link,$data)
    {
        $query = [
            "url_old" => $link,
        ];
        return $this->db->where("id =" . $data)->update('links', $query);
    }
    public function updateLinkNew($link, $data)
    {
        $query = [
            "new_url" => $link,
        ];
        return $this->db->where("id =" . $data)->update('links', $query);
    }
    public function setAllLinkWhereIP($data,$id_user)
    {
        $query = [
            "akses" => 1,
            "create_by" => $id_user,
        ];
        return $this->db->where("ip_address =" . "'$data'")->update('links', $query);
    }
    public function updateLinkCustom($data, $id_link)
    {
        $query = [
            "new_url" => $data,
        ];
        return $this->db->where("id =" . $id_link)->update('links', $query);
    }
    public function changeHistory($data)
    {
        $query = [
            "histori" => 0,
        ];
        return $this->db->where("new_url =" . "'$data'")->update('links', $query);
    }
    public function getTotalTautan(){
        return $this->db->get("links")->num_rows();
    }
    public function getAll()
    {
        return $this->db->get("links")->result_array();
    }
    public function getUserLogin($data){
        return $this->db->where('id =' . $data)->get('users')->result_array();
    }
    public function getNotifDitambahkan($id){
        return $this->db->where('create_by =' . $id)->where('status =' . 1)->order_by('create_date', 'DESC')->limit(1)->get('links')->result_array();
    }
    public function getNotifDihapus($id)
    {
        return $this->db->where('create_by =' . $id)->where('status =' . 0)->order_by('create_date', 'DESC')->limit(1)->get('links')->result_array();
    }
    public function getNotifBergabung()
    {
        return $this->db->order_by('created_on', 'DESC')->limit(1)->get('users')->result_array();
    }
    public function getAktifTautan($id){
        return $this->db->where('create_by =' . $id)->where('status =' . 1)->get('links')->num_rows();
    }
    public function getNonAktifTautan($id)
    {
        return $this->db->where('create_by =' . $id)->where('status =' . 0)->get('links')->num_rows();
    }
}