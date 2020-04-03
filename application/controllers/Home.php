<?php

class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->webScrappingView();
    }

    public function webScrappingView(){
        $this->load->view('template/footer');
        $this->load->view('template/header');
        $data['materiName'] = 'webScrapping';
        $data['pagination'] = 'latarBelakang';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/pagination.js"></script>';
        $this->load->view('template/side',$data);
        $this->load->view('template/content',$data);
    }

    public function codeIgniterView(){
        $this->load->view('template/footer');
        $this->load->view('template/header');
        $data['materiName'] = 'codeIgniter';
        $data['pagination'] = 'latarBelakang';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/pagination.js"></script>';
        $this->load->view('template/side',$data);
        $this->load->view('template/content',$data);
    }

    public function angularView(){
        $this->load->view('template/footer');
        $this->load->view('template/header');
        $data['materiName'] = 'Angular';
        $data['pagination'] = 'latarBelakang';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/pagination.js"></script>';
        $this->load->view('template/side',$data);
        $this->load->view('template/content',$data);
    }

    public function reactView(){
        $this->load->view('template/footer');
        $this->load->view('template/header');
        $data['materiName'] = 'React';
        $data['pagination'] = 'latarBelakang';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/pagination.js"></script>';
        $this->load->view('template/side',$data);
        $this->load->view('template/content',$data);
    }

    public function laravelView(){
        $this->load->view('template/footer');
        $this->load->view('template/header');
        $data['materiName'] = 'Laravel';
        $data['pagination'] = 'latarBelakang';
        $data['extra_script'] = '<script src="'.base_url().'asset/js/pagination.js"></script>';
        $this->load->view('template/side',$data);
        $this->load->view('template/content',$data);
    }

    public function movePagination(){
        $materiName = $this->input->post('materiName');
        $pagination_name = $this->input->post('pagination_name');
        $this->load->view('materi/'.$materiName.'/'.$pagination_name);
    }
}