<?php namespace App\Controllers;

use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('is_logged_in') || $session->get('role') !== 'admin') {
            return redirect()->to('/');
        }
        
        return view('admin_dashboard', ['username' => $session->get('username')]);
    }

    public function register_employee()
    {
        $session = session();
        if ($this->request->getMethod() == 'post' && $session->get('role') === 'admin') {
            $model = new UserModel();
            
            $data = [
                'role'         => $this->request->getVar('role'), 
                'department'   => $this->request->getVar('department'),
                'first_name'   => $this->request->getVar('first_name'),
                'middle_name'  => $this->request->getVar('middle_name'),
                'last_name'    => $this->request->getVar('last_name'),
                'birthdate'    => $this->request->getVar('birthdate'),
                'gender'       => $this->request->getVar('gender'),
                'email'        => $this->request->getVar('email'),
                'phone_number' => $this->request->getVar('phone_number'),
                'address'      => $this->request->getVar('address'),
                'username'     => $this->request->getVar('username'),
                'password'     => $this->request->getVar('password'), 
            ];

            $model->save($data);
            return redirect()->to('/admin/dashboard')->with('success', 'Employee created successfully.');
        }
    }
}