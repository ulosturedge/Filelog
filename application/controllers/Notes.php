<?php
class Notes extends MY_Controller{



    public function details($id) {

        $data['notes'] = $this->Notes_model->get_notes_by_id($id);
        $data['main_content'] = 'more';
        $this->load->view('layouts/main', $data);

    }


    public function production_details($id) {

        $data['notes'] = $this->Notes_model->get_production_notes_by_id($id);
        $data['main_content'] = 'more';
        $this->load->view('layouts/main', $data);
    } 



































}

?>