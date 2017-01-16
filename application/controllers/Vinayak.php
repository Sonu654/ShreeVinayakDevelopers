
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Vinayak extends CI_Controller {

    function __construct() {
        parent::__construct();
         $this->load->helper('file');
    }

    function Index() {
        $this->load->view('Header', ['title' => 'Shree Vinayak Developers']);
        $data['about']=  read_file('files/about.txt');
        $data['design']= read_file('files/Design.txt');
        $data['what_we']=read_file('files/what_we.txt');
        $data['why_us']=read_file('files/why_us.txt');
        $data['projects']=  read_file('files/projects.txt');
        $this->load->view('Index',$data);
        $this->load->view('Footer');
    }

    function more() {
        $this->load->view('Header', ['title' => 'More']);
        $this->load->view('subpage');
        $this->load->view('Footer');
    }

    function MailUs() {
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $cmt = $this->input->post('comment');
        $cmt = 'Mail By : ' . $name . '<br/><br/>' . $cmt;
        mail($email, 'Mail regarding Vinayak Developers', $cmt);
        redirect('/');
    }
    
   

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

