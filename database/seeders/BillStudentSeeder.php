<?php

namespace Database\Seeders;

use App\Models\Bill;
use App\Models\BillAmount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Student;

class BillStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::find(1)->bills()->attach([1 => ['amount' => BillAmount::find(1)->amount]]);
        Student::find(1)->bills()->attach([2 => ['amount' => BillAmount::find(2)->amount]]);
        Student::find(1)->bills()->attach([3 => ['amount' => BillAmount::find(3)->amount]]);
        Student::find(2)->bills()->attach([1 => ['amount' => BillAmount::find(1)->amount]]);
        Student::find(2)->bills()->attach([2 => ['amount' => BillAmount::find(2)->amount]]);
        Student::find(2)->bills()->attach([3 => ['amount' => BillAmount::find(3)->amount]]);
        Student::find(3)->bills()->attach([1 => ['amount' => BillAmount::find(1)->amount]]);
        Student::find(3)->bills()->attach([2 => ['amount' => BillAmount::find(2)->amount]]);
        Student::find(3)->bills()->attach([3 => ['amount' => BillAmount::find(3)->amount]]);
    }
}
