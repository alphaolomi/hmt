<?php

use Illuminate\Support\Str;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;

use Illuminate\Database\Seeder;

class BuildDatabasesForTenants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tenants = [
            ['database' => 'tenant_foo', 'domain' => 'foo.mumbo24.tech', 'name' => 'Foo Customer', 'email' => 'customer@foo.com'],
            ['database' => 'tenant_bar', 'domain' => 'bar.mumbo24.tech', 'name' => 'Bar Customer', 'email' => 'customer@bar.com'],
            ['database' => 'tenant_baz', 'domain' => 'baz.mumbo24.tech', 'name' => 'Baz Customer', 'email' => 'customer@baz.com'],
        ];

        foreach ($tenants as $customer) {

            // $website = new Website(['uuid' => $customer['database']]);
            // app(WebsiteRepository::class)->create($website);

            // $hostname = new Hostname(['fqdn' => $customer['domain']]);
            // app(HostnameRepository::class)->create($hostname);

            // app(HostnameRepository::class)->attach($hostname, $website);

            $website = new Website;
            $website->uuid = Str::random(10);
            // $customer['database'];
            app(WebsiteRepository::class)->create($website);


            $hostname = new Hostname;
            $hostname->fqdn = $customer['domain'];
            $hostname = app(HostnameRepository::class)->create($hostname);

            app(HostnameRepository::class)->attach($hostname, $website);

        }
    }
}
