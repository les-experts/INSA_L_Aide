<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Users extends Controller {

  public function index() {
    $model = new UsersModel();

    $data = [
      'users' => $model->getUsers(),
      'title' => 'Tous les users',
    ];

    echo view('templates/header', $data);
    echo view('users/overview', $data);
    echo view('templates/footer', $data);
  }

  public function view($pseudo = null) {
    $model = new UsersModel();

    $data['user'] = $model->getUsers($pseudo);

    if (empty($data['user']))
    {
        throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
    }

    $data['title'] = $data['user']['pseudo'];

    echo view('templates/header', $data);
    echo view('users/user', $data);
    echo view('templates/footer', $data);
  }
}
