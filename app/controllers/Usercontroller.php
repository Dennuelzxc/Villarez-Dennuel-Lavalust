<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: Usercontroller
 * 
 * Automatically generated via CLI.
 */
class Usercontroller extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->call->model('Usermodel');
        //$this->call->view('Userview');
    }
    public function index(){
        //$this->call->model('Usermodel');
        $users= $this->Usermodel->all();
        $data['users']=$users;
        $this->call->view('Userview',$data);
        
    }



}