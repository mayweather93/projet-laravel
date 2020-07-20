<?php
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RoleUserTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(ProductSeeder::class);
     
     
     
    }
}
