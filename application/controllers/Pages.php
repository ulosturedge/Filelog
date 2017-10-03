<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {



    public function index()
    {


        $this->load->view('pages/login');
    }

    public function register()
    {


        $this->load->view('register');

    }

    public function ajax_page() {

        $this->load->view('recordsrequest');

    }
    public function name() {

        $this->load->view('name');

    }

}