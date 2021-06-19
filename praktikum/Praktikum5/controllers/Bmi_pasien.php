<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bmi_pasien extends CI_Controller {

    public function index() {
        $this->load->model('Bmipasien_model');
		$data['pasien'] = $this->Bmipasien_model->getAll();

		$this->load->view('layouts/header');
		$this->load->view('bmi/index', $data);
		$this->load->view('layouts/footer');
    }

	public function detail($id) {
		$this->load->model('Bmipasien_model');
		$data['pasien'] = $this->Bmipasien_model->findById($id);
		$data['bmi'] = $this->Bmipasien_model->getBmi($id);

		$this->load->view('layouts/header');
		$this->load->view('bmi/detail', $data);
		$this->load->view('layouts/footer');
	}

}