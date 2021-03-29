<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    public function getUsers($pseudo = false)
    {
        if ($pseudo === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                    ->where(['pseudo' => $pseudo])
                    ->first();
    }
}
