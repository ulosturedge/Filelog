<?php
class MY_Controller extends CI_Controller{



    public $url_path = 'http://192.168.0.5:8088/judicial_codeigniter_3/';
    public $url_loc_path = 'http://localhost:8088/judicial_codeigniter_3/';

    public $table_count;




    public function __construct()
    {
        parent::__construct();

        foreach($this->show_tables() as $key => $value) {
            $this->$key = $value;
        }

    }


    public function show_tables() {



        $tables = $tables2 = $this->db->list_tables();



        $splice_point = 0;
        foreach($tables as $key => $value) {

            $tables[$value."_table"] = $value;
            $splice_point++;
        }


        $table1 = (array_slice($tables,$splice_point));
        $flip = array_flip($tables2);


        foreach($flip as $key => $value){            
            $flip[$key."_dir"]=SITE_ROOT2.US.$key.US;




        }
        $flip1 = (array_slice($flip,- $splice_point,$splice_point));

        $table_dir = array_merge($table1, $flip1);

        // print_r($table_dir);
        return($table_dir);


    }

    public function get_all($table){
        $this->db->select('*');
        $this->db->from($table);
        $query = $this->db->get();
        return $query->result();
    }


    public function get_filename_of_notes(){
        $this->db->select('filename');
        $this->db->from('note_history');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_file_id_of_notes(){
        $this->db->select('file_id');
        $this->db->from('note_history');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_user_by_id($id){
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->result();
    }




    public function get_count($table){

        $query = $this->db->query("SELECT * FROM ".$table);
        return $this->table_count = $query->num_rows();
    }

    function get_ajax_count(){

        $data = array(

            'judicial'=>$this->get_count($this->judicial_table),
            'legal'=>$this->get_count($this->legal_table),
            'production'=>$this->get_count($this->production_table),
            'output'=>$this->get_count($this->output_table),
            'user'=>$this->get_count($_SESSION['uid'].'_file_chart')
        );

        // print_r($data);
        echo json_encode($data);
    }








}
?>
