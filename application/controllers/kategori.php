<?php

class kategori extends CI_Controller{
	public function man()
	{
		$data['man'] = $this->model_kategori->data_man()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('kategori/man', $data);
        $this->load->view('templates/footer');
	}

	public function woman()
	{
		$data['woman'] = $this->model_kategori->data_woman()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('kategori/woman', $data);
        $this->load->view('templates/footer');
	}

	public function couple()
	{
		$data['couple'] = $this->model_kategori->data_couple()->result();
		$this->load->view('templates/header');
        $this->load->view('templates/menubar');
        $this->load->view('kategori/couple', $data);
        $this->load->view('templates/footer');
	}
}