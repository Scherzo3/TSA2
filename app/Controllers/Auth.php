<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function processLogin()
{
    $userModel = new UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $userModel
        ->where('username', $username)
        ->first();

    if ($user && password_verify($password, $user['password']))
    {
    session()->set([
    'logged_in' => true,
    'user_id' => $user['id'],
    'username' => $user['username']
    ]);
    return redirect()->to('/tasks');
}
    else
    {
        echo "Invalid Username or Password";
    }
}
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login');
    }

}