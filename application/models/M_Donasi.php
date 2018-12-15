<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Donasi extends CI_Model
 {
	// public $table = 'donate';
 //    public $id = 'id';
 //    public $order = 'DESC';

 //    function __construct()
 //    {
 //        parent::__construct();
 //    }


    function get_all()
    {
        return $this->db->select('disaster.*,category.name n, s.name nn')
                        ->from('disaster')
                        ->join('category','disaster.category_id = category.id')
                        ->join('user s','s.id = disaster.user_id')
                        ->limit(7)
                        ->get()
                        ->result();
    }


    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

	

}

/* End of file M_Donasi.php */
/* Location: ./application/models/M_Donasi.php */