<?php
class tes extends CI_Controller{
  function __construct()
    {
        parent::__construct();
        
    }
    function index()
    {     
      
        $this->load->view('V_tes');        
    }
}
?>