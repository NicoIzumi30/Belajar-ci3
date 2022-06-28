<?php
class Pages extends CI_Controller {
    public function index(){
        $this->load->model('m_product');
        $data['product']=$this->m_product->get_data();
        $this->load->view('v_product', $data);
    }
        public function view($page = 'home')
        {
            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
    
            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
        }
}