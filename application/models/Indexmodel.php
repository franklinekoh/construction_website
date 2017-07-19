<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of newPHPClass
 *
 * @author FRANK
 */
class Indexmodel extends CI_Model {
    //put your code here
     function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function storeContact($name = null, $email = null, $phone = null, $subject = null, $message = null, $interest = NULL) {
        
        $input = array(
            'fullname' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'message' => $message,
             'interest' => $interest
        );
        
       $insert = $this->db->insert('clients', $input);
        return $insert; 
    }
    
    public function newsLetter($subscribe) {
        $input = array(
            'email' => $subscribe
        );
        $insert = $this->db->insert('newsletter', $input);
        return $insert; 
    }
    
    public function checkEmailExist($email) {
        $this->db->select('*')
                ->from('newsletter')
                    ->where('email', $email);
        $process = $this->db->get()->result_array();
        
        if ($process) {
            return FALSE;
        }else{
            return TRUE;
        }
    }
    
    public function getAbtUsImg() {
        $this->db->select('*')
                ->from('contents');
//                    ->limit(6);
                return $this->db->get()->result_array();
    }
    
    public function getServices() {
        $query = $this->db->query("SELECT services.slider_img, services.write_up,services.portfolio_id, portfolio.portfolio_category FROM services, portfolio WHERE services.portfolio_id = portfolio.id");
        return $query->result_array();
    }
    
    public function getSingleService($id = NULL) {
        $query = $this->db->query("SELECT services.services_img, services.write_up, portfolio.portfolio_category, portfolio.id FROM services, portfolio WHERE services.portfolio_id = portfolio.id AND portfolio.id = $id");
        return $query->result_array();
    }
    
    public function fetchSelect($id = NULL, $position = NULL) {
        
        if ($position == 'left') {
            
          $query = $this->db->query("SELECT contents.portfolio_img, contents.portfolio_id, contents.portfolio_writeup, contents.portfolio_title, portfolio.portfolio_category  FROM contents, portfolio WHERE contents.portfolio_id = portfolio.id AND contents.portfolio_id = $id LIMIT 3");
        return $query->result_array();  
        
        }elseif ($position == 'right') {
            
                $query = $this->db->query("SELECT contents.portfolio_img, contents.portfolio_id, contents.portfolio_writeup, contents.portfolio_title, portfolio.portfolio_category  FROM contents, portfolio WHERE contents.portfolio_id = portfolio.id AND contents.portfolio_id = $id AND contents.id BETWEEN 4 AND 7");
        return $query->result_array();
        
        }else {
            return FALSE;
        }
        
    }
    
    public function getGalleryImg($id = NULL) {
        
        $query = $this->db->query("SELECT gallery.portfolio_id, gallery.gallery_img, portfolio.id FROM gallery, portfolio WHERE portfolio.id = gallery.portfolio_id AND gallery.portfolio_id = $id");
        return $query->result_array();
    }
    
}




