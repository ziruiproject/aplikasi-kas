<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function students()
    {
        return $this->belongsToMany(Student::class)->withPivot('amount');
    }

    public function bank()
    {
        return $this->hasOne(Bank::class);
    }

    public function amount()
    {
        return $this->hasOne(BillAmount::class);
    }
}
