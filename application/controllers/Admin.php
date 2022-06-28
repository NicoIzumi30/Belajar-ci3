<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
	public function product(){
		$this->load->model('m_product');
        $data['product']=$this->m_product->get_data();
		$data['get_category'] = $this->m_product->get_category()->result();
		$this->load->view('templates/header');
		$this->load->view('produk',$data);
		$this->load->view('templates/footer');
	}

	public function add_product(){
		$config['upload_path']          = './image/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;
		$config['max_width']            = 10240;
		$config['max_height']           = 7680;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			echo "Failed add product ";
		}
		else
		{
			$image = $this->upload->data();
			$image = $image['file_name'];
			$nama = $this->input->post('nama', TRUE);
			$description = $this->input->post('description', TRUE);
			$category = $this->input->post('category', TRUE);
			$suppliers = $this->input->post('suppliers', TRUE);

		$data = array(
			'name' => $nama,
			'image' => $image,
			'description' => $description,
			'id_category' => $category,
			'id_suppliers' => $suppliers
		);
		$this->db->insert('product', $data);
		// $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Product added successfully</div>');
		redirect('http://localhost:8080/Belajar-ci3/index.php/admin/product');
		
		}
}





		
	}
