<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

  public function index()
  {
    $this->load->view('pages/index');
  }

  public function view()
  {
    $this->load->view('pages/views');
  }
}