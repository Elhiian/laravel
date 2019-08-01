<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->truncateTable(['table_rol','table_permission']);
        $this->call(tableRolSeeder::class);
        $this->call(tablePermissionSeeder::class);
    }

    protected function truncateTable(array $tablas)
    {
        DB::statement("SET FOREIGN_KEY_CHECKS =0;");
        foreach($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement("SET FOREIGN_KEY_CHECKS=1;");
    }
}
