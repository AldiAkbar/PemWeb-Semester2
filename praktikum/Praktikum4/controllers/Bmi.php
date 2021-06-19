<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bmi extends CI_Controller {

	public function index()
	{
        $this->load->model('pasien_model','pasien1');
		$this->pasien1->id=1;
		$this->pasien1->kode='010001';
		$this->pasien1->nama='Faiz Fikri';
		$this->pasien1->tmp_lahir = 'Jakarta';
		$this->pasien1->tgl_lahir = '11-11-2011';
		$this->pasien1->gender='L';
		
		$this->load->model('pasien_model','pasien2');
		$this->pasien2->id=2;
		$this->pasien2->kode='020001';
		$this->pasien2->nama='Pandan Wangi';
		$this->pasien2->tmp_lahir = 'Bandung';
		$this->pasien2->tgl_lahir = '10-10-2010';
		$this->pasien2->gender='P';

		$this->load->model('pasien_model','pasien3');
		$this->pasien3->id=2;
		$this->pasien3->kode='020001';
		$this->pasien3->nama='Windri Sulaiman';
		$this->pasien3->tmp_lahir = 'Semarang';
		$this->pasien3->tgl_lahir = '1-1-1991';
		$this->pasien3->gender='L';



        $this->load->model('BMI_model', 'bmi1');
        $this->bmi1->berat = 30;
        $this->bmi1->tinggi = 145;
        $this->bmi1->nilaiBMI();
        $this->bmi1->statusBMI();

        $this->load->model('BMI_model', 'bmi2');
        $this->bmi2->berat = 28;
        $this->bmi2->tinggi = 140;
        $this->bmi2->nilaiBMI();
        $this->bmi2->statusBMI();

        $this->load->model('BMI_model', 'bmi3');
        $this->bmi3->berat = 77;
        $this->bmi3->tinggi = 175;
        $this->bmi3->nilaiBMI();
        $this->bmi3->statusBMI();
		


        $this->load->model('BMIpasien_model', 'bmipasien1');
        $this->bmipasien1->id = $this->pasien1->id;
		$this->bmipasien1->kode = $this->pasien1->kode;
		$this->bmipasien1->nama = $this->pasien1->nama;
		$this->bmipasien1->tmp_lahir = $this->pasien1->tmp_lahir;
		$this->bmipasien1->tgl_lahir = $this->pasien1->tgl_lahir;
		$this->bmipasien1->gender = $this->pasien1->gender;
        $this->bmipasien1->berat = $this->bmi1->berat;
        $this->bmipasien1->tinggi = $this->bmi1->tinggi;
        $this->bmipasien1->tanggal = '2021-04-11';
        $this->bmipasien1->pasien = 'Faiz Fikri';
        $this->bmipasien1->bmi = $this->bmi1->nilaiBMI();
        $this->bmipasien1->statusbmi = $this->bmi1->statusBMI();

        $this->load->model('BMIpasien_model', 'bmipasien2');
        $this->bmipasien2->id = $this->pasien2->id;
		$this->bmipasien2->kode = $this->pasien2->kode;
		$this->bmipasien2->nama = $this->pasien2->nama;
		$this->bmipasien2->tmp_lahir = $this->pasien2->tmp_lahir;
		$this->bmipasien2->tgl_lahir = $this->pasien2->tgl_lahir;
		$this->bmipasien2-> gender = $this->pasien2->gender;
        $this->bmipasien2->berat = $this->bmi2->berat;
        $this->bmipasien2->tinggi = $this->bmi2->tinggi;
        $this->bmipasien2->tanggal = '2021-04-12';
        $this->bmipasien2->pasien = 'Pandan Wangi';
        $this->bmipasien2->bmi = $this->bmi2->nilaiBMI();
        $this->bmipasien2->statusbmi = $this->bmi2->statusBMI();

        $this->load->model('BMIpasien_model', 'bmipasien3');
        $this->bmipasien3->id = $this->pasien3->id;
		$this->bmipasien3->kode = $this->pasien3->kode;
		$this->bmipasien3->nama = $this->pasien3->nama;
		$this->bmipasien3->tmp_lahir = $this->pasien3->tmp_lahir;
		$this->bmipasien3->tgl_lahir = $this->pasien3->tgl_lahir;
		$this->bmipasien3-> gender = $this->pasien3->gender;
        $this->bmipasien3->berat = $this->bmi3->berat;
        $this->bmipasien3->tinggi = $this->bmi3->tinggi;
        $this->bmipasien3->tanggal = '2021-04-12';
        $this->bmipasien3->pasien = 'Pandan Wangi';
        $this->bmipasien3->bmi = $this->bmi3->nilaiBMI();
        $this->bmipasien3->statusbmi = $this->bmi3->statusBMI();


        $list_pasien = [
            $this->bmipasien1, $this->bmipasien2, $this->bmipasien3
        ];
		
		$data['list_pasien']=$list_pasien;
        $this->load->view('layouts/header');
		$this->load->view('bmi/index', $data);
		$this->load->view('layouts/footer');;
    }

}