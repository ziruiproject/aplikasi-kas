<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create(['student_id' => 1, 'admin_name' => 'YUDHA', 'title' => 'Kas', 'amount' => 5000]);
        Payment::create(['student_id' => 2, 'admin_name' => 'YUDHA', 'title' => 'Kas', 'amount' => 10000]);
        Payment::create(['student_id' => 3, 'admin_name' => 'EKA', 'title' => 'Kas', 'amount' => 5000]);
        Payment::create(['student_id' => 4, 'admin_name' => 'EKA', 'title' => 'Kas', 'amount' => 10000]);
        Payment::create(['student_id' => 5, 'admin_name' => 'YUDHA', 'title' => 'Kas', 'amount' => 5000]);
    }
}
