<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {
 
 function __construct()
 {
  parent::__construct();
  header( "Content-type: text/html; charset=utf-8");
  $this->load->helper(array('form', 'url'));
 }
 
 function index()
 { 
  $this->load->view('upload_form', array('error' => ' ' ));
 }

 function do_upload()
 {
  $config['upload_path'] = 'static/uploads/';
  $config['allowed_types'] = 'gif|jpg|png';
  $config['max_size'] = '2048';
  $config['max_width']  = '1024';
  $config['max_height']  = '768';
  $config['file_name']  = time();

  $this->upload->initialize($config);
 
  if ( ! $this->upload->do_upload())
  {
   $error = array('error' => $this->upload->display_errors());
   
   $this->load->view('upload_form', $error);
  } 
  else
  {
   $data = array('upload_data' => $this->upload->data());
   
   $this->load->view('upload_success', $data);
  }
 } 
}
?>