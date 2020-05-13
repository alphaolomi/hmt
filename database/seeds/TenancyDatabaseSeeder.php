<?php

use Illuminate\Database\Seeder;

class TenancyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\Customer\Models\User::class, 10)->create();

        $users->each(function ($user) {
            factory(App\Customer\Models\Post::class, 3)->create(['user_id' => $user->id]);
        });
    }
}
