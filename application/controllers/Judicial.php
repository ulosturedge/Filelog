<?php
class Judicial extends MY_Controller{




    public function __construct()
    {
        parent::__construct();

        $this->check_the_login();

        $this->clear_output();


    }

    private function check_the_login() {

        if($this->session->userdata('user_id') === null) {

            redirect('public/users');

        } else {


        }
    }


    public function copy_in() {

        $source = '/input/';


        $destination = SITE_ROOT.DS.'judicial/';      

        $sourceFiles = glob($source . '*.pdf');

        //print_r($sourceFiles);

        foreach($sourceFiles as $file) {

            $baseFile = basename($file);

            if (file_exists($destination . $baseFile)) {

                $originalHash = md5_file($file);
                $destinationHash = md5_file($destination . $baseFile);
                if ($originalHash === $destinationHash) {
                    continue;
                }

            }
            copy($file, $destination . $baseFile);
            sleep(1);

        }

    }

    public function newName($path, $filename) {

        $res = '$path/$filename';
        if (!file_exists($res)) return $res;
        $fnameNoExt = pathinfo($filename,PATHINFO_FILENAME);
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        $i = 1;
        while(file_exists('$path/$fnameNoExt ($i).$ext')) $i++;
        return '$path/$fnameNoExt ($i).$ext';


    }

    public function index(){



        /*if($this->session->userdata('user_id') === null) {

        redirect('public/users');}*/



        $filename = '/input/*.pdf';
        if (count(glob($filename)) > 0) {

            $this->copy_in();
            array_map('unlink', glob("C:\input\*.pdf"));


        }

        $this->create_filelog($this->judicial_dir, $this->judicial_table);
        $this->all_filelogs();
        $data['notes'] = $this->get_file_id_of_notes();
        $data['judicials'] = $this->get_all($this->judicial_table);
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = '/judicial';
        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }


    }
    public function judicial() {

        if($this->session->userdata('user_id') === null) {

            redirect('public/users');}


    }

    public function tableuser() {

        $this->User_model->create_user_table();

    }

    public function dashboard() {


        $this->create_filelog($this->dashboard_dir, $this->dashboard_table);
        $this->all_filelogs();
        $data['notes'] = $this->get_file_id_of_notes();
        $data['dashboards'] = $this->get_all($this->dashboard_table);
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = 'dashboard_table';

        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }
    }

    public function log() {

        if ($this->session->userdata('uid') == 'admin') {

            $data['logs'] = $this->get_all($this->log_table);
            $data['uid'] = $this->session->userdata('uid');
            $data['main_content'] = 'admin/log_table';
            $this->load->view('admin/admin_main', $data);

        }

    }

    public function user_list() {

        if ($this->session->userdata('uid') == 'admin') {

            $data['users'] = $this->get_all($this->users_table);
            $data['uid'] = $this->session->userdata('uid');
            $data['main_content'] = 'admin/user_table';
            $this->load->view('admin/admin_main', $data);

        }

    }
    public function legal() {

        $this->create_filelog($this->legal_dir, $this->legal_table);
        $this->all_filelogs();
        $data['notes'] = $this->get_file_id_of_notes();
        $data['legals'] = $this->get_all($this->legal_table);
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = 'legal';

        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }

    }

    public function production() {

        $this->create_filelog($this->production_dir, $this->production_table);
        $this->all_filelogs();
        $data['notes'] = $this->get_file_id_of_notes();
        $data['productions'] = $this->get_all($this->production_table);
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = 'production';
        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }

    }

    public function user($user) {

        if ($this->session->userdata('uid') == 'admin') { 

            echo "This page is not available."; } else {

            $this->create_filelog($this->users_dir.$user.US, $user.'_file_chart');
            $this->all_filelogs();
            $data['notes'] = $this->get_file_id_of_notes();
            $data['users'] = $this->Judicial_model->get_all_user_chart($user);
            $data['uid'] = $this->session->userdata('uid');
            $data['main_content'] = 'user';
            $this->load->view('layouts/main', $data);

        }

    }

    public function output() {


        $this->create_filelog($this->output_dir, $this->output_table);
        $this->all_filelogs();
        $data['notes'] = $this->get_file_id_of_notes();
        $data['outputs'] = $this->get_all($this->output_table);   
        $data['uid'] = $this->session->userdata('uid');
        $data['main_content'] = 'output';
        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }

    }



    public function check_out_file($table) {

        $this->set_file_check_out($_POST['id'], $table);

        //add dynamic so #of files in user_chart is updated immediatedly
        $this->create_filelog($this->users_dir.$_SESSION['uid'].US, $_SESSION['uid'].'_file_chart');
        $table == judicial ? redirect('public/judicial') :
        redirect('public/judicial/'.$table);
    }

    public function set_file_check_out($id, $table) {

        $id = htmlspecialchars($_POST['id']); 
        $path = $_POST['path'];
        $file = $_POST['file'];
        $uid = $this->session->userdata('uid');

        if (rename(SITE_ROOT.DS.$table.DS.$file, SITE_ROOT.DS.'users'.DS.$uid.DS.$file)) {


            $sql = "UPDATE dashboard SET file_status='checked out of <strong>".$table."</strong> reserved by <strong>".$uid."</strong> on: ".$this->get_time()."' WHERE filename='$file'";   


            $result = $this->db->query($sql);

            $sql2 = "DELETE FROM $table WHERE id = $id";

            $result2 = $this->db->query($sql2);

            if($result && $result2) {
                echo "success.<br />";

            } else {
                echo " we had a problem";
                die("Database query failed." . mysqli_error($this->db_conn()));
            }


        } else {

            echo "please check the file";
        }   

    }

    public function send_file_on($id, $table) {

        $id = htmlspecialchars($_POST['id']);
        $path = $_POST['path'];
        $file = $_POST['file'];
        $uid = $this->session->userdata('uid');

        if (rename(SITE_ROOT.DS.'users'.DS.$uid.DS.$file, SITE_ROOT.DS.$table.DS.$file)) {


            $sql3 = "UPDATE dashboard SET file_status='sent to <strong>".$table."</strong> by <strong>".$uid."</strong> on: ".$this->get_time()."' WHERE filename='$file'";


            $result = $this->db->query($sql3);
            $sql2 = 'DELETE FROM ' . $uid .'_file_chart WHERE id =' . $id;

            $result = $this->db->query($sql2); 

            if($result) {
                //  echo "success.<br />";

            } else {
                die("Database query failed." . mysqli_error($this->db_conn()));
            }


        } else {

            echo "please check the file";
        }




        //add dynamic so #of files in destination table is updated immediatedly
        $this->create_filelog(SITE_ROOT2.US.$table.DS, $table);

        $sql3 = "UPDATE ".$table." SET file_status='sent to <strong>".$table."</strong> by <strong>".$uid."</strong> on: ".$this->get_time()."' WHERE filename='$file'";


        $result = $this->db->query($sql3);

        redirect('public/judicial/user/'.$_SESSION['uid']);
    }




    public function clear_output() {

        $folder_array = glob($this->output_dir.'*.{pdf}', GLOB_BRACE); // targets only *.pdfs in target folder

        foreach($folder_array as $key=> $value){             //removes ../ in array values
            $folder_array[$key]=str_replace($this->output_dir,"",$value);
        }

        $db_array = array();
        $files = $this->get_all($this->output_table);


        foreach($files as $file) {


            $db_array[] = ($file->filename);
        }

        $differences = array_diff($db_array, $folder_array);

        foreach ($differences as $difference) {

            $sql = "DELETE FROM output WHERE filename = '$difference'"; //remove from output folder
            $result = $this->db->query($sql);
            $sql2 = "DELETE FROM dashboard WHERE filename = '$difference'";//erase entry from dashboard
            $result2 = $this->db->query($sql2);
            $sql3 = "DELETE FROM note_history WHERE filename = '$difference'";
            $result3 = $this->db->query($sql3);

            if($result) {
                echo "successful delete from output.<br />";

            } else {
                die("Database query failed." . mysqli_error($this->db_conn()));
            }

        } 
    }


    public function add_notes() {



        $id = htmlspecialchars($_POST['id']);
        //$id2 = mysqli_real_escape_string($conn, $id);
        $notes = htmlspecialchars($_POST['notes']);
        //$notes2 = mysqli_real_escape_string($conn, $notes);

        $file_id = $_POST['file_id'];

        $file = $_POST['file'];    
        $uid = $this->session->userdata('uid');



        $sql = "UPDATE dashboard set timestamp = timestamp , notes='$notes' WHERE file_id = '$file_id'";
        $result = $this->db->query($sql);

        $sql2 = "UPDATE ".$uid."_file_chart set timestamp = timestamp , notes='$notes' WHERE file_id = '$file_id'";
        $result2 = $this->db->query($sql2); 

        $sql3 = "INSERT INTO note_history (`id`, `file_id`, `filename`,`prev_notes`, `timestamp`, `uid`) VALUES (NULL, '$file_id', '$file', '$notes', CURRENT_TIMESTAMP, '$uid')";

        $result3 = $this->db->query($sql3);

        redirect('public/judicial/user/'.$_SESSION['uid']);

    }

    public function all_notes() {

        $data['notes'] = $this->get_all($this->note_history_table);
        $data['main_content'] = 'all_notes';
        if ($this->session->userdata('uid') == 'admin') {

            $this->load->view('admin/admin_main', $data);
        } else {
            $this->load->view('layouts/main', $data);  
        }

    }


    /*public function get_all_notes() {

        $data['notes'] = $this->get_all($this->note_history_table);
        $data['main_content'] = 'more';
        $this->load->view('layouts/main', $data);

    }*/



    public function new_time_ago($when) {


        $ptime = time()-$when;


        if ($ptime > 86400) {

            $days = floor($ptime / 86400);
        } else {

            $days = 00;
        }



        $rtime = gmdate('H:i:s', $ptime);
        # 02:22:05


        $rarray = explode(":", $rtime);

        $day = $days < 2 ? 'day' : 'days';
        $hour = $rarray[0] > 1 ? 'hours' : 'hour';
        $minute = $rarray[1] > 1 ? 'minutes' : 'minute';

        $remainder = $rarray[0] < 1 && $rarray[1] < 1 ? 'Just Modified' : $rarray[0].' '.$hour.' '.$rarray[1].' '.$minute.' ago';

        if ($rarray[0] < 1 && $rarray[1] > 0) {

            return $rarray[1].' '.$minute.' ago';
        }

        if ($days >=1) {


            return $days.' '.$day.' '.$remainder;
        }
        else {
            return $remainder;
        }
    }

    public function get_time() {

        $now = date("F j, Y, g:i a");

        return $now;
    }

    public function create_filelog($directory, $table) {
        global $database;


        $pdfs = glob($directory.'*.{pdf}', GLOB_BRACE); // targets only *.pdfs in target folder

        // print_r($pdfs);
        foreach($pdfs as $key=> $value){             //removes ../ in array values
            $pdfs[$key]=strtolower(str_replace($directory,"",$value));


        }
        sort($pdfs);

        foreach ($pdfs as $filename) {


            if ($table == $_SESSION['uid'].'_file_chart') {

                $filepath = $this->url_loc_path.'users'.US.$_SESSION['uid'].'/'.$filename; } else {


                $filepath = $this->url_loc_path.$table.'/'.$filename;
            }



            $time = date("F d Y H:i:s.", filemtime($directory.$filename)); //lastmodified

            $timestamp = date("Y-m-d H:i:s", filemtime($directory.$filename)); //timestamp

            $when = filemtime($directory.$filename);

            $ago = $this->new_time_ago($when);


            $sql = "INSERT into $table (filename, filepath, lastmodified, ago, timestamp, user, statusid, notes, file_status) VALUES ('$filename','$filepath', '$time', '$ago', '$timestamp', '', 0, '', '') ON DUPLICATE KEY UPDATE lastmodified = '$time', ago = '$ago'";

            $result = $this->db->query($sql);
            if($result) {
                //  echo "success.<br />";

            } else {
                die("Database query failed." . mysqli_error($this->conn()));
            }




            if ($table == 'judicial' || $table == 'legal' || $table == 'production') {

                $sql = "INSERT into dashboard (filename, filepath, lastmodified, ago, timestamp, user, statusid, notes, file_status) VALUES ('$filename','$filepath', '$time', '$ago', '$timestamp', '', 0, '', '') ON DUPLICATE KEY UPDATE lastmodified = '$time', ago = '$ago'";



                $result = $this->db->query($sql);


                if($result) {
                    //  echo "success.<br />";

                } else {
                    die("Database query failed." . mysqli_error($this->conn()));
                }


            }


        }




    }

    public function all_filelogs() {



        $pdfs1 = glob($this->judicial_dir.'*.{pdf}', GLOB_BRACE);
        $pdfs2 = glob($this->legal_dir.'*.{pdf}', GLOB_BRACE);
        $pdfs3 = glob($this->production_dir.'*.{pdf}', GLOB_BRACE);
        $pdfs4 = glob($this->output_dir.'*.{pdf}', GLOB_BRACE);
        $pdfs5 = glob($this->users_dir.$_SESSION['uid'].US.'*.{pdf}', GLOB_BRACE);


        $all_records = array_merge($pdfs1,$pdfs2,$pdfs3,$pdfs4,$pdfs5);






        foreach($all_records as $key=> $value) {      
            $filename =(explode('/',$value));
            $all_records[$key] =strtolower(end($filename));

        }


        sort($all_records);







        foreach($all_records as $key => $filename) {

            $key = $key +1;

            $sql = "INSERT into all_records (file_id, filename) VALUES ($key, '$filename') ON DUPLICATE KEY UPDATE file_id = file_id, filename = filename";
            $result = $this->db->query($sql);

            if($result) {
                //  echo "success.<br />";

            } else {
                die("Database query failed." . mysqli_error($this->conn()));
            }

        }

        sort($all_records);
        $count = 0;
        foreach ($all_records as $filename) {
            $count++;
            $sql = "UPDATE all_records set file_id = $count WHERE filename = '$filename'";
            $result = $this->db->query($sql);
        }



        $main_dirs = array($this->judicial_table, $this->legal_table, $this->production_table, $this->output_table, $_SESSION['uid']."_file_chart", $this->dashboard_table, $this->note_history_table);

        foreach($main_dirs as $table) { 

            $sql = "UPDATE ".$table." INNER JOIN all_records ON ".$table.".filename = all_records.filename SET ".$table.".file_id = all_records.file_id WHERE all_records.filename = ".$table.".filename";
            $result2 = $this->db->query($sql);
        }




    }



    public function delete_user($id) {


        $query = $this->db->get_where('users', array('id' => $id));
        $user = $query->result();
        $array = json_decode(json_encode($user), True);

        $name = $array[0]['uid'];


        $this->load->dbforge(); 
        $this->dbforge->drop_table($name."_file_chart",TRUE);

        $this->db->delete('users', array('id' => $id));
        $this->session->set_flashdata('deleted', 'User successfully deleted');

        redirect('public/judicial/user_list');

    }

    public function edit_user_page($id) {

        $data['user'] = $this->get_user_by_id($id);
        $this->load->view('admin/edit_user.php',$data);

    }

    public function edit_user($id) {

        $data = array(
            'id' => $id,
            'fname' => $this->input->post('fname'),
            'uid'   => $this->input->post('uid'),
            'pwd'   => md5($this->input->post('pwd'))
        );

        $this->db->replace('users', $data);

        $this->session->set_flashdata('updated', 'User successfully updated');

        redirect('public/judicial/user_list');

    }



} 
?>

