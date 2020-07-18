<?php

use Illuminate\Database\Seeder;
use App\Job;
class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Job::create(array('name'=>"administrateur"));
        Job::create(array('name'=>"collectionneur"));
        Job::create(array('name'=>"vendeur"));
        Job::create(array('name'=>"vip"));
    }
}
