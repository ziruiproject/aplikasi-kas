<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
