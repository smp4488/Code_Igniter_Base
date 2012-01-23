<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Empty_Controller extends CI_Controller {

	public function index()
	{
            $data['mainView'] = 'mainView';
            $this->load->view('layout/layout', $data);
	}
}