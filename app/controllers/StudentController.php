<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Controller: StudentController
 * 
 * Automatically generated via CLI.
 */
class StudentController extends Controller {
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        
        $_SESSION['campus_pass_granted'] = true;

        //$data['page_title'] = '[YOUR UNIQUE PAGE TITLE]';

        $this->call->view('student/index');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00070',
            'name'       => 'Korine Alexa R.Borbe',
            'course'     => 'BSIT',
            'year'       => '3rd Year',
            'section'    => '3-F2',
            'email'      => 'korineborbe10@gmail.com',

            'address'    => 'Suqui Calpan City',
            'contact'    => '09707525583',
            'skills'     => 'volleyball',
            'bio'        => 'cutie',
        ];

        $this->call->view('student/profile', $student);
    }


}