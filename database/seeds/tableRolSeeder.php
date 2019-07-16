<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class tableRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=[
            'administrador',
            'editor',
            'supervisor'
        ];
        foreach($rol as $key=> $value){
            DB::table('table_rol')->insert([
                'nombre' => $value,
                'created_at'=> Carbon::now()->format("Y-m-d H:i:s")
            ]);
        }
    }
}
