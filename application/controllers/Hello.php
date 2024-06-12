<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hello extends CI_Controller
{


    public function index()
    {
        echo "HELLO UNISKA";
    }

    public function hello_2110020031()
    {
        $this->load->model('hello_model');
        $data = $this->hello_model->hello_2110020031();
        echo $data;
    }

    public function hello_view()
    {
        $this->load->view('hello_view');
    }

    public function hello_mvc()
    {
        $this->load->model('hello_model');

        $data['mvc'] = $this->hello_model->hello_mvc();
        $data['nama'] = 'RAMADHAN';
        $data['npm'] = '2110020031';

        $this->load->view('hello_view', $data);
    }
}