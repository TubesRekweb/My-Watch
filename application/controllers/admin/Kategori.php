<?php

class Kategori extends CI_Controller{
	public function man()
	{
		$data['man'] = $this->model_kategori->data_man()->result();
		$this->load->view('templates/admin_header');
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/man', $data);
        $this->load->view('templates/admin_footer');
	}

	public function woman()
	{
		$data['woman'] = $this->model_kategori->data_woman()->result();
		$this->load->view('templates/admin_header');
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/woman', $data);
        $this->load->view('templates/admin_footer');
	}

	public function couple()
	{
		$data['couple'] = $this->model_kategori->data_couple()->result();
		$this->load->view('templates/admin_header');
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/couple', $data);
        $this->load->view('templates/admin_footer');
	}
}