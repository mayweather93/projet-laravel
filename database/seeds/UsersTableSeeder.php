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
                'job_id' => 1,
                'name' => 'customer 1',
                'email' => 'ruth@nachattube.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'remember_token' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),
             1 =>
            array (
                'id' => 2,
                'job_id' => 2,
                'name' => 'customer 1',
                'email' => 'ruth2@nachattube.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'remember_token' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),
             2 =>
            array (
                'id' => 3,
                'job_id' => 3,
                'name' => 'customer 1',
                'email' => 'ruth3@nachattube.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YQPWfR9j6iFHZbIg8KqiL.nJH3qqZpK2IkOcXQbMRUpIN82gDLrVe',
                'remember_token' => NULL,
                'created_at' => '2020-02-11 00:16:34',
                'updated_at' => '2020-02-19 17:25:45',
            ),

          
        ));
    }
}
