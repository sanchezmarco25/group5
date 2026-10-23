<?php namespace App\Controllers;

class Customer extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('is_logged_in') || $session->get('role') !== 'customer') {
            return redirect()->to('/');
        }
        
        return view('customer_dashboard', ['username' => $session->get('username')]);
    }
}