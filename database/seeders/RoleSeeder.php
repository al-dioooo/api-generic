<?php

namespace Database\Seeders;

use App\Models\Pivot\RoleUserBranch;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            // All
            [
                'application_id' => 1,
                'name' => 'Super Administrator',
                'is_super' => 1,
                'created_by' => 'Alice Evergarden',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Inventory
            [
                'application_id' => 1,
                'name' => 'Warehouse',
                'is_super' => 0,
                'created_by' => 'Alice Evergarden',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Cashier
            [
                'application_id' => 2,
                'name' => 'Finance',
                'is_super' => 0,
                'created_by' => 'Alice Evergarden',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            // Point of Sales
            [
                'application_id' => 3,
                'name' => 'Waiter',
                'is_super' => 0,
                'created_by' => 'Alice Evergarden',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        Role::insert($roles);

        RoleUserBranch::insert([
            [
                'role_id' => 1,
                'user_id' => 1,
                'branch_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 1,
                'user_id' => 3,
                'branch_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 1,
                'user_id' => 4,
                'branch_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
