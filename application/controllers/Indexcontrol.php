<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of index
 *parent controller class
 * @author FRANK
 */
class Indexcontrol extends CI_Controller    {
    //put your code here
    function __construct() {
        parent::__construct();
        
        $this->load->helper(array('form'));
        $this->load->model('Indexmodel');
        $this->load->library(array('form_validation', 'user_agent'));
        
        
        $this->company = 'kunle investments LTD.';
        $this->phone = '(+234) 08039421039';
        $this->phone1 = '(+234) 08095275448';
        $this->email = 'kunleinvestment4technology@yahoo.co.uk';
        $this->email1 = 'support@kunleinvestment.com';
        $this->email2 = 'contact@kunleinvestment.com';
        $this->adress = '';
        $this->branch = '';
    }

    public function contact() {
        
        $this->form_validation->set_rules("name", "text", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("phone", "phone", "required|is_natural|min_length[11]", array('is_natural' => '%s can only collect phone numbers only', 'max_length' => 'invalid phone number'));
        $this->form_validation->set_rules("subject", "text", "required");
        $this->form_validation->set_rules("message", "text", "required|max_length[500]");
        
        
        if ($this->form_validation->run() === true){
            $name = $this->input->post(html_escape('name'));
            $email = $this->input->post(html_escape('email'));
            $phone = $this->input->post(html_escape('phone'));
            $subject = $this->input->post(html_escape('subject'));
            $message = $this->input->post(html_escape('message'));
            

          $ufullname = ucwords($name);
          $sendTo = 'kunleinvestment4technology@yahoo.co.uk';
          $headers = "From: " . strip_tags($email) . "\r\n";
                $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
                $headers .= "BCC: " . $sendTo . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                
                $newMessage = "<h1>A MESSAGE FROM KUNLE INVESTMENT LIMITED</h1> \r\n<h3>name : </h3>$name \r\n <h3>subject : </h3> $subject \r\n <h3>message: </h3>$message<h3>Phone number: </h3>$phone";
               $mailed = mail($sendTo, $subject, $newMessage, $headers);
          if ($mailed) {
          $store = $this->Indexmodel->storeContact($name, $email, $phone, $subject, $message);
                        $this->session->set_flashdata('success', ''.$ufullname.', Your message has being successfully sent, we will get back to you shortly');
                redirect(base_url("index"));
          }else{
              $this->session->set_flashdata("error", "sorry!! your message could not be sent successfully");
              $this->home();
          }
             
        }else{
            $this->session->set_flashdata('error', validation_errors());
            $this->home();
        }
    }
    
    public function subscribe() {
         $this->form_validation->set_rules("subcribe", "text", "required|valid_email");
        if ($this->form_validation->run() === true) {
            $subcribe = $this->input->post(html_escape('subcribe'));
            $check = $this->Indexmodel->checkEmailExist($subcribe);
            if ($check) {
                $headers = "From: " . strip_tags('contact@kunleinvestment.com.ng') . "\r\n";
                $headers .= "Reply-To: " . strip_tags('contact@kunleinvestment.com.ng') . "\r\n";
                $headers .= "CC: " . $subcribe . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                $subject = "kunle investment news letter subscription";
                $message = "Your news letter subscription was successfull we will keep in touch!";
                $mailed = mail($subscribe, $subject, $message, $headers);
            if ($mailed) {
             $send = $this->Indexmodel->newsLetter($subcribe);
             $send;
                 $this->session->set_flashdata('success', 'Your news letter subscription was successful we will keep in touch!');
            redirect(base_url("index"));
                
            }else{
                $this->session->set_flashdata('error', 'Your news letter subscription could not be completed at the moment, pls try again!');
            redirect(base_url("index"));
            }
            }else{
                  $this->session->set_flashdata('error', 'Your are already subscribed to our news letter, we promise to keep in touch!');
            redirect(base_url("index"));  
            }
           
         }else{
            $this->session->set_flashdata('error', validation_errors());
            redirect(base_url("index"));
        }
    }
    
      //index page
    public function home() {
               
          //mobile view
        if ($this->agent->is_mobile()) {
                           
                 //gallery image
//       mechanical img
       $data['GI_mech'] = $this->Indexmodel->getGalleryImg(1);
//       fabrication Image
       $data['GI_fab'] = $this->Indexmodel->getGalleryImg(2);
//       foundry image
       $data['GI_foundry'] = $this->Indexmodel->getGalleryImg(3);
//       forging image
       $data['GI_forg'] = $this->Indexmodel->getGalleryImg(4);
//       civil image
       $data['GI_civil'] = $this->Indexmodel->getGalleryImg(5);
        //about-us image
       $data['abtImg'] = $this->Indexmodel->getAbtUsImg();
       //services data
       $data['services'] = $this->Indexmodel->getServices();
       //page title
       $data['title'] = 'kunleinvestmentlimited | index';
        $this->load->view('layouts/mobileheader', $data);
        $this->load->view('pages/index', $data); 
        $this->load->view('layouts/footer');
//        desktop view
        }elseif ($this->agent->is_browser()){
       
               //about-us image
       $data['abtImg'] = $this->Indexmodel->getAbtUsImg();
       
       //gallery image
//       mechanical img
       $data['GI_mech'] = $this->Indexmodel->getGalleryImg(1);
//       fabrication Image
       $data['GI_fab'] = $this->Indexmodel->getGalleryImg(2);
//       foundry image
       $data['GI_foundry'] = $this->Indexmodel->getGalleryImg(3);
//       forging image
       $data['GI_forg'] = $this->Indexmodel->getGalleryImg(4);
       //       civil image
       $data['GI_civil'] = $this->Indexmodel->getGalleryImg(5);
       //services data
       $data['services'] = $this->Indexmodel->getServices();
       //page title
       $data['title'] = 'kunleinvestmentlimited | index';
        $this->load->view('layouts/mobileheader', $data);
        $this->load->view('pages/index', $data); 
        $this->load->view('layouts/footer');
//        robot view
        }elseif ($this->agent->is_robot()){
            die();
        }else{
            ;
        }
    }
    
        public function contactS() {
        
        $this->form_validation->set_rules("name", "text", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("phone", "phone", "required|is_natural|min_length[11]", array('is_natural' => '%s can only collect phone numbers only', 'max_length' => 'invalid phone number'));
        $this->form_validation->set_rules("subject", "text", "");
        $this->form_validation->set_rules("message", "text", "required|max_length[500]");
        
        
        if ($this->form_validation->run() === true){
        $this->form_validation->set_rules("name", "text", "required");
        $this->form_validation->set_rules("email", "email", "required");
        $this->form_validation->set_rules("phone", "phone", "required|is_natural|min_length[11]", array('is_natural' => '%s can only collect phone numbers only', 'max_length' => 'invalid phone number'));
        $this->form_validation->set_rules("subject", "text", "");
        $this->form_validation->set_rules("message", "text", "required|max_length[500]");
        
        
        if ($this->form_validation->run() === true){
            $name = $this->input->post(html_escape('name'));
            $email = $this->input->post(html_escape('email'));
            $phone = $this->input->post(html_escape('phone'));
//            $subject = $this->input->post(html_escape('subject'));
            $message = $this->input->post(html_escape('message'));
            
            switch ($this->uri->segment(3)) {
                case 1:

                $subject = 'Mechanical Enginnering Production';
                    break;
                case 2:

                     $subject = 'Metal Fabricatin';
                    break;
                case 3:

                    $subject = 'Engineering foundry';
                    break;
                case 4:

                    $subject = 'Drop forging and blacksmithing';
                    break;
                case 5:
                    $subject = 'Waste to energy';

                default:
                    break;
            }
            $interest = $subject;
          
          $ufullname = ucwords($name);
           $sendTo = 'kunleinvestment4technology@yahoo.co.uk';
          $headers = "From: " . strip_tags($email) . "\r\n";
                $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
                $headers .= "BCC: " . $sendTo . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                
                $newMessage = "<h1>A MESSAGE FROM KUNLE INVESTMENT LIMITED</h1> \r\n<h3>name : </h3>$name \r\n <h3>subject : </h3> $subject \r\n <h3>message: </h3>$message<h3>Phone number: </h3>$phone";
               $mailed = mail($sendTo, $subject, $newMessage, $headers);
          if ($mailed) {
$store = $this->Indexmodel->storeContact($name, $email, $phone, $subject, $message, $interest);
                        $this->session->set_flashdata('success', ''.$ufullname.', Your message has being successfully sent, we will get back to you shortly');
                redirect(base_url("index"));
          }else{
              $this->session->set_flashdata("error", "sorry!! your message could not be sent successfully");
              $this->contactPage();
          }
             
        }else{
            $this->session->set_flashdata('error', validation_errors());
            $this->contactPage();
        }
    }
        }
    
    //    contact page
    public function contactPage() {
        //title
        $data['title'] = 'contact us |' .urldecode($this->uri->segment(2)); 
        //get services information
        $data['services'] = $this->Indexmodel->getSingleService($this->uri->segment(3));
        //subject
        $data['subject'] = urldecode($this->uri->segment(2));
        $this->load->view('layouts/dynamicheader', $data);
        $this->load->view('pages/contact'); 
        $this->load->view('layouts/footer');
    }
    
    
}
