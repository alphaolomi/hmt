<?php

use App\System\Models\User;
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
        $user = factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);

        $this->call([
            BuildDatabasesForTenants::class
        ]);
    }
}
