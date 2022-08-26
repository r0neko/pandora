<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function users() {
        return $this->belongsToMany('App\Models\User', 'user_group_users', 'group_id', 'user_id');
    }

    public function add_user($user) {
        $this->users()->attach($user);
    }
}
