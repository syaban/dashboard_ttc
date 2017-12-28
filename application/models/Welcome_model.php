<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_power_plant(){
        $res = $this->db->query("SELECT pln, genset, fueltank, lvmdp1, lvmdp2, lvmdp3 from power_plant order by id DESC limit 1")->row();
        return $res;
    }

    public function get_cooling(){
        $res = $this->db->query("SELECT level3, level4, level6, level7, level8, level9_bss, level9_transmisi from cooling order by id DESC limit 1")->row();
        return $res;
    }

    public function get_rack_space(){
        $res = $this->db->query("SELECT level3, level4, level6, level7, level8, level9_bss, level9_transmisi, level4_nonprod from rack_space order by id DESC limit 1")->row();
        return $res;
    }

    public function get_capacity($name){
        $res = $this->db->query("SELECT capacity, unit from capacity_references where name = '$name'")->row();
        return $res;
    }
}
?>
