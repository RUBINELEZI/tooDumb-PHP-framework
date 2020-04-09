<?php


class Pages  extends Controller
{
    public function __construct()
    {

    }

    public function index(){
        //Pass data to the view
        $data = [
            'title' => 'Welcome'
        ];
        //Call the view NOTE you dont need to add .php extencion
        $this->view('home', $data);
    }


}