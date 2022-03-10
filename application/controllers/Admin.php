<?php
  class Admin extends CI_Controller{
      function index(){
          $this->load->view('partisi_back/head');
          $this->load->view('partisi_back/navbar');
          $this->load->view('partisi_back/sidebar');
          $this->load->view('partisi_back/breadcumb');
          $this->load->view('admin/index');
          $this->load->view('partisi_back/footer');
          $this->load->view('partisi_back/js');
      }
} 