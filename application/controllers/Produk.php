<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model', 'produk_model');
        $this->load->model('Users_model', 'users_model');
    }

    /** produk */

    public function produk_list($start = null)
    {
        $data['title'] = "Product List";

        $config['base_url'] = base_url('produk/produk_list');
        $config['resue_query_string'] = true;

        /** keyword filter */
        $keyword = $this->input->get('keyword');
        if ($keyword) {
            $data['keyword'] = $keyword;
        } else {
            $data['keyword'] = '';
        }
        // print_r($keyword);
        // die;

        $config['total_rows'] = $this->produk_model->count_all_produk($data['keyword']);
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $data['pagination'] = $this->pagination->create_links();

        $data['start'] = $start;
        $data['from_row'] = 1 + $start;
        $data['to_row'] = $this->produk_model->count_produk($config['per_page'], $data['start'], $data['keyword']) + $start;
        $data['total_rows'] = $config['total_rows'];
        $data['produk'] = $this->produk_model->get_produk($config['per_page'], $data['start'], $data['keyword']);

        /** get produk dari model produk */
        // $data['produk'] = $this->produk_model->get_all_data();
        //get from session
        $email = $this->session->userdata('email');
        $data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('produk/produk_list', $data);
        $this->load->view('partials/footer');
    }

    public function get_produk($id_produk){
        $data = $this->produk_model->get_data_by_id($id_produk);

        print_r($data);
        die;
        return $data;
    }

    /**akhir produk */


    /**
     * penjualan list
     */
    public function sales_list()
    {
        $data['title'] = "Penjualan List";
        //get from session
        $email = $this->session->userdata('email');
        $data['user'] = $get_user = $this->users_model->get('users', 'email', $email);
        $data['role'] = $get_role = $this->session->userdata('role_id');
        $data['jenis_kelamin'] = $this->get_jenis_kelamin();
        $this->load->view('partials/header', $data);
        $this->load->view('partials/sidebar', $data);
        $this->load->view('produk/sales_list', $data);
        $this->load->view('partials/footer');
    }

    public function penjualan_list() {
        $data = $this->produk_model->data_penjualan_list();
        echo json_encode($data);
    }

    public function get_penjualan_list_by_id(){
        $id_produk = $this->input->get('id_produk');

        $data = $this->produk_model->get_produk_list_by_id($id_produk);
        echo json_encode($data->row());
    }

    public function get_jenis_kelamin(){
        $data = $this->produk_model->get_jenis_kelamin()->result();
        return $data;
    }

    /** akhir penjualan list */
}
