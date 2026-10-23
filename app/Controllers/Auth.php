<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        $model = new UserModel();

        $data = [
            'role'         => 'customer',
            'department'   => 'None',
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

        if ($model->save($data)) {
            return redirect()->to(site_url('home'))->with('success', 'Registration successful! Please log in.');
        }

        return redirect()->back()->withInput()->with('error', 'Registration failed.');
    }

    public function login_process()
    {
        $session = session();
        $model = new UserModel();
        
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $user = $model->where('username', $username)->first();
        
        if ($user && password_verify($password, $user['password'])) {
            $session->set([
                'id'           => $user['id'],
                'username'     => $user['username'],
                'role'         => $user['role'],
                'is_logged_in' => TRUE
            ]);
            
            if ($user['role'] === 'admin') return redirect()->to('/admin/dashboard'); 
            if ($user['role'] === 'technician') return redirect()->to('/technician/dashboard');
            return redirect()->to('/customer/dashboard'); 
        }
        
        $session->setFlashdata('error', 'Invalid credentials');
        return redirect()->to(site_url('login'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}