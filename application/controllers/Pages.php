<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'indexcontrol.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pages
 *child of parent class IndexControl, loads all view pages
 * @author FRANK
 */
class Pages extends indexcontrol{
//404 page
    public function _404() {
        $this->load->view('layouts/_404header');
        $this->load->view('errors/_404');
        $this->load->view('layouts/footer');
    }

//dynamic services page
    public function services() {
        //dynamic page title
        $data['title'] =  urldecode($this->uri->segment(2));
        //get services information
        $data['services'] = $this->Indexmodel->getSingleService($this->uri->segment(3));
        $this->load->view('layouts/dynamicheader', $data);
        $this->load->view('pages/services', $data);
        $this->load->view('layouts/footer');
//        var_dump($data['services']);
    }
    
    public function wasteToEnergy() {
        $data['title'] = 'waste to energy';
        $this->load->view('layouts/dynamicheader', $data);
        $this->load->view('pages/alternativeenergy');
        $this->load->view('layouts/footer');
    }
    

    
   
}
