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
            [
                'application_id' => 1,
                'name' => 'Super Admin',
                'is_super' => 1,
                'created_by' => 'Admin Kacafilm',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'name' => 'Admin Outlet',
                'is_super' => 0,
                'created_by' => 'Admin Kacafilm',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'name' => 'Admin Gudang',
                'is_super' => 0,
                'created_by' => 'Admin Kacafilm',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'name' => 'Sales',
                'is_super' => 0,
                'created_by' => 'Admin Kacafilm',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 1,
                'name' => 'Approver',
                'is_super' => 0,
                'created_by' => 'Admin Kacafilm',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'application_id' => 2,
                'name' => 'Super Administrator',
                'is_super' => 1,
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
                'role_id' => 6,
                'user_id' => 3,
                'branch_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'role_id' => 6,
                'user_id' => 4,
                'branch_id' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
