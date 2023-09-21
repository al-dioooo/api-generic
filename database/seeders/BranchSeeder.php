<?php

namespace Database\Seeders;

use App\Models\Branch;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            [
                'name' => 'Main',
                'code' => 'MAIN',
                'contact' => '123',
                'address' => 'Jakarta City',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Branch::insert($branches);
    }
}
