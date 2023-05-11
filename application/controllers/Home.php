<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_students', 'model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = FALSE)
	{
		if ($id === FALSE) {
			$data['students'] = $this->model->read();
			$this->load->view('navbar');
			$this->load->view('students', $data);
			$this->load->view('footer');
		} else {
			$data['student'] = $this->model->read($id);
			$this->load->view('navbar');
			$this->load->view('edit', $data);
			$this->load->view('footer');
		}
	}

	public function create($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
		$this->form_validation->set_rules('npm', 'NPM', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('navbar');
			$this->load->view('create');
			$this->load->view('footer');
		} else {
			$id = uniqid('item', TRUE);

			// Setup PickImage
			$config['upload_path']          = './uploads/images';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 10000;
			$config['file_ext_tolower']     = TRUE;
			$config['file_name'] = str_replace('.', '_', $id);

			// Upload with config
			$this->load->library('upload', $config);

			// Condition 
			if (!$this->upload->do_upload('image')) {
				$this->session->set_flashdata('error', $this->upload->display_errors());
				redirect('Home/index');
			} else {
				$filename = $this->upload->data('file_name');
				$this->model->create($id, $filename);
				redirect();
			}
		}
	}

	public function update($id = FALSE)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Name', 'required|max_length[30]');
		$this->form_validation->set_rules('npm', 'NPM', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['student'] = $this->model->read($id);
			$this->load->view('navbar');
			$this->load->view('update', $data);
			$this->load->view('footer');
		} else {
			$newFile = $_FILES['new_image']['name'];
			if ($newFile == TRUE) {
				$student = $this->model->read($id);

				// Condition where file already exist will delete the existing file
				if (file_exists('./uploads/images/' . $student->filename)) {
					unlink('./uploads/images/' . $student->filename);
				}

				// Setup PickImage
				$config['upload_path']          = './uploads/images';
				$config['allowed_types']        = 'jpeg|jpg|png';
				$config['max_size']             = 10000;
				$config['file_ext_tolower']     = TRUE;
				$config['file_name'] = $student->filename;

				// Upload with config
				$this->load->library('upload', $config);
				clearstatcache(true, $student->filename);

				// Condition where file error
				if (!$this->upload->do_upload('new_image')) {
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('Home/update/' . $id);
				} else {
					$this->model->update($id, $newFile);
					redirect();
				}
			} else {
				$this->model->update($id);
				redirect();
			}
		}
	}
}
