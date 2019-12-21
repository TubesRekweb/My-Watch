	<?php
	
class Profile extends CI_Controller
{
	public function index()
	{
        $this->load->view('templates/admin_header');
        $this->load->view('templates/admin_menubar');
        $this->load->view('admin/profile');
        $this->load->view('templates/admin_footer');
   
	}
}