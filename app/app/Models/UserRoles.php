<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Relations\Pivot;

class UserRoles extends Pivot
{
    protected $table = 'users_roles';
}
