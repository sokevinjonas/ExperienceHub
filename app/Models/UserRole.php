<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $guarded =  [
        'id',
        'created_at',
        'updated_at'
    ];

    static public function getUserRole($columns = ['*'])
    {
        return UserRole::where('name', 'utilisateur')->first($columns);
    }

    static public function getModeratorRole($columns = ['*'])
    {
        return UserRole::where('name', 'modérateur')->first($columns);
    }

    static public function getAdministratorRole($columns = ['*'])
    {
        return UserRole::where('name', 'administrateur')->first($columns);
    }

    static public function getSuperAdministratorRole($columns = ['*'])
    {
        return UserRole::where('name', 'super-administrateur')->first($columns);
    }
}