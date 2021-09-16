<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user_roles')->insert(
            array(
                [
                    'name' => 'Admin',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Customer',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Trainer',
                    'created_at' => date('Y-m-d H:i:s'),
                ],
            )
        );
    }
}
