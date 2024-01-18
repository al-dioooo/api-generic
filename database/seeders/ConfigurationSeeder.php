<?php

namespace Database\Seeders;

use App\Models\Configuration;
use Illuminate\Database\Seeder;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::truncate();

        $configurations = [
            [
                'application_id' => 1,
                'key' => 'hierarchy',
                'value' => json_encode([
                    [
                        'key' => 'product-need',
                        'value' => false,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-family',
                        'value' => false,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-class',
                        'value' => false,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-line',
                        'value' => false,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-type',
                        'value' => true,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-brand',
                        'value' => true,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-series',
                        'value' => true,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-model',
                        'value' => true,
                        'default_parent' => 'auto'
                    ],
                    [
                        'key' => 'product-unit',
                        'value' => true,
                        'default_parent' => 'auto'
                    ]
                ])
            ]
        ];

        Configuration::insert($configurations);
    }
}
