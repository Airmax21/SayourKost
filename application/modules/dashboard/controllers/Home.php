<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function index()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $this->load->view('app/header',$header);
        $this->load->view('home');
    }    
    public function aboutus()
    {
        $header['home'] = 'Dashboard';
        $header['css'] = array();
        $this->load->view('app/header',$header);
        $this->load->view('aboutus');
    }    
}
