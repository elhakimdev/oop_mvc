<?php
class About extends Controller
{
    public function index(){

        $data['tittle'] = 'ABOUT - MY FRAMEWORK';

        $this->view('layout/header',$data);
        $this->view('About/index');
        $this->view('layout/footer');
    }    
}
