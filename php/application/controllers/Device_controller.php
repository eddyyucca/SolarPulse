<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Device_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('devices_m');
		$this->load->helper(array('url'));
		$level_akun = $this->session->userdata('level');
		// if ($level_akun != "admin") {
		// 	$this->session->set_flashdata('login', 'n_login');
		// 	return redirect('login');
		// }
	}
// devices
	public function index()
	{
		$data['judul'] = 'Data devices';
		$data['nama'] = $this->session->userdata('nama');
		$data['nik'] = $this->session->userdata('nik');

		$data['data'] = $this->devices_m->get_all_devices();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('devices/data_devices', $data);
		$this->load->view('template/footer');
	}
	public function add_device()
	{
		$data['judul'] = 'Create devices';
		$data['nama'] = $this->session->userdata('nama');
		$data['nik'] = $this->session->userdata('nik');

		$this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
     	$this->load->view('devices/add_device', $data);
        $this->load->view('template/footer', );
	}
	
	public function edit_devices($id_device)
	{
		$data['judul'] = 'Update devices';
		$data['nama'] = $this->session->userdata('nama');
		$data['nik'] = $this->session->userdata('nik');

		$data['data'] = $this->devices_m->get_row_device($id_device);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('devices/edit_devices', $data);
		$this->load->view('template/footer');
	}
	public function proses_tambah_devices()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'ip' => $this->input->post('ip')
		);
		$this->db->insert('device_mppt', $data);
		$this->session->set_flashdata('pesan', 'buat');
		return redirect('device_controller');
	}
	public function proses_edit_devices($id_device)
	{
		$data = array(
			'name' => $this->input->post('name'),
			'ip' => $this->input->post('ip')
		);
		$this->db->where('id_device', $id_device);
		$this->db->update('device_mppt', $data);
		$this->session->set_flashdata('pesan', 'ubah');
		return redirect('device_controller/index');
	}
	public function delete_devices($id_device)
	{

		$this->db->where('id_device', $id_device);
		$this->db->delete('device_mppt');
		$this->session->set_flashdata('pesan', 'hapus');
		return redirect('device_controller');
	}
	public function Contact()
	{
		$data['judul'] = 'Me devices';
		
		$this->load->view('contact');
	}
	// end devices
}