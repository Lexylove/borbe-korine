<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * Middleware: StudentMiddleware
 * 
 * Automatically generated via CLI.
 */
class StudentMiddleware
{
    public function handle(Closure $next)
    {


        if (!isset($_SESSION['campus_pass_granted'])){
            $_SESSION['access_notice'] = "Hold up! You need a Campus Pass before viewing this profile — visit the home page first.";
            redirect('student');
            return;
        }


        return $next();
    }
}