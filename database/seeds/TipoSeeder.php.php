<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                DB::table('tipos')->insert(['tip_detalles'=>'Sueldos Y Salarios']);
                DB::table('tipos')->insert(['tip_detalles'=>'Viveres']);
                DB::table('tipos')->insert(['tip_detalles'=>'Oscio']);
                DB::table('tipos')->insert(['tip_detalles'=>'Educacion']);
    }
}