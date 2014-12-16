<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends CI_Controller {

	public function index()
	{
		if($this->input->post('message')) {
			$this->addMessage();
		}
		else {
			$this->loadPage();
		}
	}
	
	public function loadPage()
	{
		$data['active'] = 'message';
		$this->load->view('header', $data);
		$this->load->view('message_form');
		
		/* Load all messages here */	
		$this->load->model('Messages_model');
		$data['messages'] = $this->Messages_model->get_messages();
		$this->load->view('messages', $data);
		
		$this->load->view('footer');
	}	
	
	public function addMessage()
	{		
		$message = $this->input->post('message', TRUE);
		$name = $this->input->post('name', TRUE);
	
		$this->load->model('Messages_model');
		$this->Messages_model->add_message($message, $name);		
		
		$this->loadPage();
	}
}