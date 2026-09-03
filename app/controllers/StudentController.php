<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

public function __construct()
    {
        parent::__construct();
    }

	public function index() {

        $_SESSION['student_access'] = true; // Set the session variable to true for access

		 $student = [
            'student_id' => 'MCC2023-0075',
            'name' => 'Jann Dennuel M. Villarez',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F6',
            'email' => 'jdennuelvillarez@email.com'
        ];

        $this->call->view('student/index', $student);
	}

    public function profile(){
    $student = [
        'student_id' => 'MCC2023-0075',
        'name' => 'Jann Dennuel M. Villarez',
        'course' => 'BS Information Technology',
        'year' => '3rd Year',
        'section' => 'F6',
        'email' => 'jdennuelvillarez@email.com',
        'skills'=>'Still Exploring',
        'hobbies'=>'Gaming, Doom Scrolling, Listening Music'
    ];

    $this->call->view('student/profile', $student);
    }

}
?>