<?php namespace App\Controllers;

class Technician extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('is_logged_in') || $session->get('role') !== 'technician') {
            return redirect()->to('/');
        }
        
        return view('technician_dashboard', ['username' => $session->get('username')]);
    }
}