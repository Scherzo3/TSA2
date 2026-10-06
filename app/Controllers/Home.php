<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Home extends BaseController
{
public function index()
{
    $taskModel = new TaskModel();

    $data['tasks'] = $taskModel
        ->where('task_date', date('Y-m-d')) 
        ->findAll();

    return view('welcome', $data);
}

public function tasks()
{
    $taskModel = new TaskModel();

    $data['tasks'] = $taskModel
    ->where('is_archived', 0)
    ->findAll();

    return view('tasks', $data);
}

    public function profile()
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
    public function hash()
    {
    echo password_hash('admin123', PASSWORD_DEFAULT);
    }
    public function newTask()
    {
        return view('new_task', [
            'errors' => [],
            'old' => [],
        ]);
    }

    public function createTask()
    {
        $rules = [
            'title' => 'required|max_length[150]',
            'task_date' => 'required|valid_date[Y-m-d]',
        ];

        if (! $this->validate($rules)) {
            return view('new_task', [
                'errors' => $this->validator->getErrors(),
                'old' => $this->request->getPost(),
            ]);
        }

        $taskModel = new TaskModel();
        $taskModel->insert([
            'title' => trim($this->request->getPost('title')),
            'status' => 'Pending',
            'task_date' => $this->request->getPost('task_date'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(site_url('tasks'));
    }
    public function editTask($id)
    {
    $taskModel = new TaskModel();

    $data['task'] = $taskModel->find($id);

    return view('edit_task', $data);
    }
    public function updateTask($id)
    {
    $taskModel = new TaskModel();

    $taskModel->update($id, [
        'title' => $this->request->getPost('title'),
        'task_date' => $this->request->getPost('task_date')
    ]);

    return redirect()->to('/tasks');
    }
    public function deleteTask($id)
    {
    $taskModel = new TaskModel();

    $taskModel->update($id, [
        'is_archived' => 1
    ]);

    return redirect()->to('/tasks');
    }
}