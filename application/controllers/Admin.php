<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('directory');
        $this->load->helper('file');
    }

    function Index() {
        $this->load->view('Header', ['title' => 'Shree Vinayak Developers']);
        $this->load->view('login');
        $this->load->view('Footer');
    }

    function main_() {
        $this->load->view('Admin/admin_header', ['title' => 'Admin Home']);
        $data['dir'] = directory_map('files');
        $this->load->view('Admin/index', $data);
        $this->load->view('Admin/admin_footer');
    }

    function getTxt() {
        $file = $this->input->post('fileName');
        echo $str = read_file('files/'.$file);
    }
    
    function writeTxt(){
        $file=$this->input->post('fileName');
        $data=$this->input->post('data');
        if(!write_file('files/'.$file, $data)){
            echo 'error in editing try again...!';
        }else{
            echo 'Saved';
        }
    }
    
    function load_Main(){
        redirect('Admin/main_');
    }
    
     function valLogin(){
        if($this->input->post('txtuserid')=='admin@vinayakbuilders.com'){
            if(md5($this->input->post('txtuserpass'))==md5('developers@2020')){
                redirect('/Admin/main_');
            }else{
                echo 'password not valid';
            }
        }else{
            echo 'user name not valid';
            }
    }
    
    function Logout(){
        redirect('Admin/Index');
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

