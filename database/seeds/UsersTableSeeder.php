<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ruth',
                'email' => 'ruth@nachattube.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'job_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2020-04-28 17:47:12',
                'updated_at' => '2020-04-28 17:47:12',
            ),

        ));
    }
}
