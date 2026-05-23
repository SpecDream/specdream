<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specdream extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('banner');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function airbnb_clone()
	{
		$this->load->view('airbnb_header');
		$this->load->view('menu');
		$this->load->view('airbnb_banner');
		$this->load->view('airbnb_stats');
		$this->load->view('airbnb_footer');
	}
	public function udemy_clone()
	{
		$this->load->view('udemy_header');
		$this->load->view('menu');
		$this->load->view('udemy_banner');
		$this->load->view('udemy_stats');
		$this->load->view('udemy_footer');	
	}
	public function tripadvisor()
	{
	 	$this->load->view('tripadvisor_header');
	 	$this->load->view('menu');
	 	$this->load->view('tripadvisor_banner');
	 	$this->load->view('tripadvisor_stats');
	 	$this->load->view('tripadvisor_footer');
	}
	public function contact_us()
	{
		$this->load->view('contact_header');
	 	$this->load->view('menu');
	 	$this->load->view('contact_banner');
	 	$this->load->view('contact_stats');
	 	$this->load->view('contact_footer');
	}
	public function privacy_policy()
	{
		$this->load->view('privacy_header');
		$this->load->view('menu');
		$this->load->view('policy_banner');
		$this->load->view('privacy_stats');
		$this->load->view('policy_footer');
	}
	public function refund_policy()
	{
		$this->load->view('refund_policy');
		$this->load->view('menu');
		$this->load->view('policy_banner');
		$this->load->view('refund_stats');
		$this->load->view('policy_footer');
	}
	public function submit_contact_us()
	{
	    if($this->input->post('name')){
	    
	        $name = $this->input->post('name');
	        $email = $this->input->post('email');
	        $ip = $this->input->post('ip');
	        $address = $this->input->post('address');
	        $subject = $this->input->post('subject');
	        $message = $this->input->post('message');
	        $business = $this->input->post('business');
	        
	        $data['name'] = $name;
	        $data['email'] = $email;
	        $data['ip'] = $ip;
	        $data['address'] = $address;
	        $data['subject'] = $subject;
	        $data['message'] = $message;
	        $data['business'] = $business;
	        
	        $config['protocol'] = 'smtp'; // mail, sendmail, or smtp    The mail sending protocol.
            $config['smtp_host'] = 'smtp.hostinger.com'; // SMTP Server Address.
            $config['smtp_user'] = 'sales@specdream.com'; // SMTP Username.
            $config['smtp_pass'] = 'Sales@Spec@Dream-#2026'; // SMTP Password.
            $config['smtp_port'] = '465'; // SMTP Port. 25 is for local host
            $config['smtp_crypto'] = 'ssl'; // SMTP Port. 25 is for local host
            $config['smtp_timeout'] = '10'; // SMTP Timeout (in seconds).
            $config['wordwrap'] = TRUE; // TRUE or FALSE (boolean)    Enable word-wrap.
            $config['wrapchars'] = 76; // Character count to wrap at.
            $config['mailtype'] = 'html'; // text or html Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don't have any relative links or relative image paths otherwise they will not work.
            $config['charset'] = 'utf-8'; // Character set (utf-8, iso-8859-1, etc.).
            $config['validate'] = FALSE; // TRUE or FALSE (boolean)    Whether to validate the email address.
            $config['priority'] = 3; // 1, 2, 3, 4, 5    Email Priority. 1 = highest. 5 = lowest. 3 = normal.
            $config['crlf'] = "\r\n"; // "\r\n" or "\n" or "\r" Newline character. (Use "\r\n" to comply with RFC 822).
            $config['newline'] = "\r\n"; // "\r\n" or "\n" or "\r"    Newline character. (Use "\r\n" to comply with RFC 822).
            $config['bcc_batch_mode'] = FALSE; // TRUE or FALSE (boolean)    Enable BCC Batch Mode.
            $config['bcc_batch_size'] = 200; // Number of emails in each BCC batch.

                $this->load->library('email');
                $this->email->initialize($config);
                $this->email->from('sales@specdream.com', 'Robot');
                $this->email->to('specdream.contact@gmail.com');
                $this->email->subject($subject);
                $msg = $this->load->view('contact-template',$data,TRUE);
                $this->email->message($msg);
                // $this->email->send();
                if ($this->email->send()) {
                    // echo 'Mail Sent';
                } else {
                    // echo $this->email->print_debugger();exit();
                }
               $data['success'] = 'success';
	    }
	    $this->load->view('contact_header',$data);
	 	$this->load->view('menu');
	 	$this->load->view('contact_banner',$data);
	 	$this->load->view('contact_stats',$data);
	 	$this->load->view('contact_footer',$data);
		
	}
}
