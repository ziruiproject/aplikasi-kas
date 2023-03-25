<?php

namespace App\Models;

use App\Http\Controllers\SpendingController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentChanges;

class Student extends Authenticatable
{
    use HasFactory;

    protected $guarded = [];

    public function history()
    {
        return $this->hasMany(Payment::class);
    }

    public function bills()
    {
        return $this->belongsToMany(Bill::class)->withPivot('amount');
    }

    public function changes()
    {
        return $this->hasMany(PaymentChanges::class);
    }

    public function spendings()
    {
        return $this->hasMany(Spending::class);
    }
}
