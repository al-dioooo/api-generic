<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Havii',
                'application_id' => 1,
                'country_id' => 100,
                'phone' => '6285719589131',
                'password' => bcrypt('1234cdefG'),
                'is_verified' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Nuh Risaldi',
                'application_id' => 1,
                'country_id' => 100,
                'phone' => '6287839441471',
                'password' => bcrypt('1234cdefG'),
                'is_verified' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Alice Evergarden',
                'application_id' => 2,
                'country_id' => 100,
                'phone' => '6285173075151',
                'password' => bcrypt('aldio1234'),
                'is_verified' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'rfkyafrzl',
                'application_id' => 2,
                'country_id' => 100,
                'phone' => '6289525693526',
                'password' => bcrypt('1234cdefG'),
                'is_verified' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        User::insert($user);
    }
}
