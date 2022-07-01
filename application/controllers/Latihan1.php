<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller{

    public function index(){
        echo "<h1>Contoh Class</h1>";
    }

    //Hanya menggunakan Controller
    public function biodatasatu(){
        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "Nama : Rizki Rahmatullah";
    }

    //menggunakan Controller dan view
    public function biodatadua(){
        
        $this->load->view('view_biodata');

    }

    //menggunakan controller dan model
    public function biodatatiga(){
        $this->load->model('model_biodata');
        $bio = $this->model_biodata->biodata();
        
        echo "<h1>Perkenalkan</h1>";
        echo "<br>";
        echo "Nama : " . $bio;
    }

    //menggunakan controller model dan view
    public function biodataempat(){
        $this->load->model('model_biodata', 'mod'); //model
        $data['bio'] = $this->mod->biodata();

        $data['title'] = "Form Biodata";

        $this->load->view('view_biodata', $data); //view

    }
    
}