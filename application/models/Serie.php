<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serie extends CI_Model {

  function __construct()
  {
      parent::__construct();
      $this->load->library('session');
      $this->load->library('my_queries');
  }

  public function get_all($limit){
    $query = $this->my_queries->query('get_all_series', ['limit' => $limit]);
    return $query->result();
  }
}