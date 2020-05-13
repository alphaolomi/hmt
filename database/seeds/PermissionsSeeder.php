<?php

use Illuminate\Database\Seeder;
use App\Tenant\Models\Permission;
use App\Tenant\Models\Role;
use App\Tenant\Models\User;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'edit-articles']);
        Permission::create(['name' => 'delete-articles']);
        Permission::create(['name' => 'publish-articles']);
        Permission::create(['name' => 'unpublish-articles']);


        $writerRole = Role::create(['name' => 'writer']);
        $writerRole->givePermissionTo('edit-articles');
        $writerRole->givePermissionTo('delete-articles');

        $adminRole = Role::create(['name' => 'adminRole']);
        $adminRole->givePermissionTo('publish-articles');
        $adminRole->givePermissionTo('unpublish-articles');

        $adminRole = Role::create(['name' => 'super-adminRole']);


        $user1 = factory(User::class)->create([
            'name' => 'writer 1',
            'email' => 'w1@mumbo24.tech',
        ]);
        factory(App\Tenant\Models\Post::class, 3)->create(['user_id' => $user1->id]);

        $user2 = factory(User::class)->create([
            'name' => 'writer 2',
            'email' => 'w2@mumbo24.tech',
        ]);
        factory(App\Tenant\Models\Post::class, 3)->create(['user_id' => $user2->id]);


        $user1->assignRole($writerRole);
        $user2->assignRole($writerRole);

        $admin = Factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@mumbo24.tech',
        ]);
        $admin->assignRole($adminRole);

        $superAdmin = Factory(User::class)->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@mumbo24.tech',
        ]);

        $superAdmin->assignRole($adminRole);
    }
}
