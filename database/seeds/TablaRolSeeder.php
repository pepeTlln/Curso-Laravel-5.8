<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols=['administrador', 'editor','supervisor' ];
        foreach($rols as $key => $valor){
            DB::table('rol')->insert([
                'nombre' => $valor,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')  
            ]);
        }
        
    }
}
