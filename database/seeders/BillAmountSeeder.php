<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BillAmount;

class BillAmountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillAmount::create([
            'bill_id' => 1,
            'amount' => 150000
        ]);

        BillAmount::create([
            'bill_id' => 2,
            'amount' => 75000
        ]);

        BillAmount::create([
            'bill_id' => 3,
            'amount' => 75000
        ]);
    }
}
