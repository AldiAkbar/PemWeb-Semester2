<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pasien extends CI_Controller {

	public function index()
	{
		$this->load->model('Pasien_model');
		$data['pasien'] = $this->Pasien_model->getAll();

		$this->load->view('layouts/header');
		$this->load->view('pasien/index', $data);
		$this->load->view('layouts/footer');
		
	}

	public function detail($id) {
		$this->load->model('Pasien_model');
		$data['detail_pasien'] = $this->Pasien_model->findById($id);

		$this->load->view('layouts/header');
		$this->load->view('pasien/detail', $data);
		$this->load->view('layouts/footer');
	}
	
}

/* End of file Home.php */
/* Location: ./application/modules/home/controllers/Home.php */