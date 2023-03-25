<?php

namespace Database\Seeders;

use App\Models\Spending;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Spending::create([
            'student_id' => 9,
            'amount' => 35000,
            'desc' => 'Bayar donasi osis'
        ]);

        Spending::create([
            'student_id' => 9,
            'amount' => 35000,
            'desc' => 'Bayar donasi osis lagi'
        ]);

        Spending::create([
            'student_id' => 34,
            'amount' => 10000,
            'desc' => 'Beli galon 2'
        ]);

        Spending::create([
            'student_id' => 34,
            'amount' => 20000,
            'desc' => 'Beli tissue 3'
        ]);

        Spending::create([
            'student_id' => 9,
            'amount' => 1000000,
            'desc' => 'Bayar yb'
        ]);

    }
}
