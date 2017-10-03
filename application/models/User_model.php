<?php 
class User_model extends CI_Model{
    public function register(){
        $data = array(
            'fname' => $this->input->post('fname'),
            'uid'   => $this->input->post('uid'),
            'pwd'   => md5($this->input->post('pwd'))
        );
        $insert = $this->db->insert('users', $data);
        $this->create_profile($_POST['uid']);
        $this->create_user_table($_POST['uid']);
        return $insert;
    }

    public function login($uid,$pwd){  
        //Validate
        $this->db->where('uid',$uid);
        $this->db->where('pwd',$pwd);

        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            echo "did not find user";
            return false;
        }
    }

    public function create_profile($uid) {

        mkdir(SITE_ROOT.DS.'users'.DS.$uid);

    }

    public function create_user_table($name) {

        if ($this->session->userdata('uid') == 'admin') {

            $this->load->dbforge();       

            $this->dbforge->add_field('id');
            $this->dbforge->add_field("file_id int(20) NOT NULL");
            $this->dbforge->add_field("filename varchar(255) NOT NULL");
            $this->dbforge->add_field("filepath varchar(255) NOT NULL");
            $this->dbforge->add_field("lastmodified varchar(255) NOT NULL");
            $this->dbforge->add_field("ago varchar(255) NOT NULL");
            $this->dbforge->add_field("timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
            $this->dbforge->add_field("born_date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP");
            $this->dbforge->add_field("user varchar(255) NOT NULL");
            $this->dbforge->add_field("statusid int(1) NOT NULL");
            $this->dbforge->add_field("notes text NOT NULL");
            $this->dbforge->add_field("file_status varchar(100) NOT NULL");

            $attributes = array('ENGINE' => 'InnoDB');
            $this->dbforge->create_table($name."_file_chart", TRUE);

            $this->db->query("ALTER TABLE `".$name."_file_chart` ADD UNIQUE INDEX (`filename`)");
            $this->db->query("ALTER TABLE `".$name."_file_chart` ADD UNIQUE INDEX (`filepath`)");

        }






    }
}