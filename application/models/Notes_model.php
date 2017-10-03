<?php
class Notes_model extends CI_Model{


    public function get_notes_by_id($id) {
        $this->db->select('*');
        $this->db->from('note_history');
        $this->db->where('file_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }



    public function get_legal_notes_by_id($id) {
        $this->db->select('*');
        $this->db->from('legal_note_history');
        $this->db->where('file_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }

    public function get_production_notes_by_id($id) {
        $this->db->select('*');
        $this->db->from('production_note_history');
        $this->db->where('file_id', $id); 
        $query = $this->db->get();
        return $query->result();
    }


























}
?>