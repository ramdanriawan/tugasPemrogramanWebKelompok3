<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server extends CI_Controller{

  function index()
  {
      $this->load->view("server");
  }

  function server2()
  {
      $this->load->view("server2");
  }

  function server3()
  {
      $this->load->view("server3");
  }

  function server4()
  {
      $this->load->view("server4");
  }

}
