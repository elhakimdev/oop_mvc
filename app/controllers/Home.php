<?php
class Home extends Controller
{
    public function index()
    {

        $data['tittle'] = 'OOP | MVC';

        $this->view('layout/header', $data);
        $this->view('home/index');
        $this->view('layout/footer');
    }
}
