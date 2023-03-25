<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Spending;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentSeeder::class);
        $this->call(PaymentSeeder::class);
        // $this->call(BillSeeder::class);
        // $this->call(BillAmountSeeder::class);
        // $this->call(BillStudentSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(PaymentChangesSeeder::class);
        $this->call(SpendingSeeder::class);
    }
}
