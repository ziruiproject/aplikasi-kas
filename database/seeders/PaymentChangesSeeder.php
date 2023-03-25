<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PaymentChanges;

class PaymentChangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentChanges::create([
            'student_id' => 1,
            'admin_name' => 'Yudha',
            'amount' => -5000,
            'desc' => 'Terlalu rajin'
        ]);
        PaymentChanges::create([
            'student_id' => 2,
            'admin_name' => 'Yudha',
            'amount' => -5000,
            'desc' => 'Berkelakuan baik'
        ]);
        PaymentChanges::create([
            'student_id' => 3,
            'admin_name' => 'Yudha',
            'amount' => 5000,
            'desc' => 'Melawan bendahara'
        ]);
        PaymentChanges::create([
            'student_id' => 4,
            'admin_name' => 'Yudha',
            'amount' => 5000,
            'desc' => 'Tidak baik'
        ]);
    }
}
