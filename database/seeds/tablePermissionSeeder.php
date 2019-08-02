<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class tablePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permission::class)->create();
    }
}
