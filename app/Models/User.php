<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticable ;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable
{
    use HasFactory;
    use Notifiable;
    use SoftDeletes;

    public function detail()
    {
        // each user has one user_details
        return $this->hasOne(UserDetail::class);
    }

    public function department()
    {
        // this user belongs to a department
        return $this->belongsTo(Department::class);
    }
}
