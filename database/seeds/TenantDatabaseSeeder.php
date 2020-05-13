<?php

use Illuminate\Database\Seeder;

class TenantDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Tenant\Models\User::class, 10)->create();

        $users->each(function ($user) {
            factory(App\Tenant\Models\Post::class, 3)->create(['user_id' => $user->id]);
        });
    }
}
