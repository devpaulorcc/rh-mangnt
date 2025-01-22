<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'zip_code',
        'city',
        'phone',
        'salary',
        'admission_date'
    ];

    public function user()
    {
        // each user has one user_details / each user_details belongs to a single user
        return $this->belongsTo(User::class);
    }
}
