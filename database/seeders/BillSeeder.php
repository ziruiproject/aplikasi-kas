<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bill;

class BillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Bill::create([
            'title' => 'YearBook',
        ]);

        Bill::create([
            'title' => 'DP Seni Budaya'
        ]);

        Bill::create([
            'title' => 'Seni Budaya'
        ]);
    }
}
