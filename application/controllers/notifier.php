<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifier extends CI_Controller {

	public function index()
	{
		if($this->input->post('message')) {
			$this->sendMessage();
		}
		else {
			$this->loadPage();
		}
	}
	
	public function loadPage()
	{
		$data['active'] = 'notifier';
		$this->load->view('header', $data);
		$this->load->view('message_form');		
		$this->load->view('footer');
	}	
	
	public function sendMessage()
	{		
		$message = $this->input->post('message', TRUE);
		$name = $this->input->post('name', TRUE);
		
		include(APPPATH.'libraries/php-pushover-master/Pushover.php');
		$push = new Pushover();
		$push->setToken('aJPmsVUVJBK6cYVY4568FMwsrhTgv9');
		$push->setUser('uswg4fHfB9dKfkYdQiDo3bguAQaBVB');
		$push->setTitle('Visitor Message from kgdinesh.in');
		$push->setMessage($message.' - '.$name);
		//$push->setDevice('iPhone');
		//$push->setPriority(2);
		//$push->setRetry(60); //Used with Priority = 2; Pushover will resend the notification every 60 seconds until the user accepts.
		//$push->setExpire(3600); //Used with Priority = 2; Pushover will resend the notification every 60 seconds for 3600 seconds. After that point, it stops sending notifications.
		//$push->setCallback('http://chris.schalenborgh.be/');
		//$push->setTimestamp(time());
		//$push->setDebug(true);
		//$push->setSound('bike');
		$go = $push->send();		
		
		$this->loadPage();
	}
}