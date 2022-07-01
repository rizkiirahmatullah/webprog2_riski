<?php
class Latihansatu extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar web programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihansatu');
        
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihansatu->jumlah($n1, $n2);

        $this->load->view('view_latihan', $data);
    }
}