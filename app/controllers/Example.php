<?php
class Example extends Controller
{
    public function index()
    {

        $data['tittle'] = 'OOP | MVC';
        $data['Example'] = $this->model('Example_model')->getAllUser(); // prototype model call
        $this->view('layout/header', $data);
        $this->view('Example/index',$data);
        $this->view('layout/footer');
    }
}
