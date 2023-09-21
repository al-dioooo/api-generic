<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => 'Indonesian Rupiah',
                'code' => 'idr',
                'rate' => 1
            ],
            [
                'name' => 'US Dollar',
                'code' => 'usd',
                'rate' => 15707.05
            ],
            [
                'name' => 'Euro',
                'code' => 'eur',
                'rate' => 16200.09
            ]
        ];

        Currency::insert($currencies);
    }
}
