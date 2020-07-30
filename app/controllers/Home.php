<?php
class Home extends Controller
{
    public function index()
    {

        $data['tittle'] = 'OOP | MVC';
        $data['name'] = $this->model('User_model')->getUser(); // prototype model call
        $this->view('layout/header', $data);
        $this->view('home/index',$data);
        $this->view('layout/footer');
    }
}
