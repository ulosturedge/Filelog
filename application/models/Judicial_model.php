<?php
class Judicial_model extends CI_Model{


    public function get_all_user_chart($user){
        $this->db->select('*');
        $this->db->from($user.'_file_chart');
        $query = $this->db->get();
        return $query->result();
    }

}
