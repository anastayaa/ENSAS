<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departements=[
        	[
        		'titre'=>'Génie Informatique, Réseaux et Télécommunications',
        		'image'=>'informatiqueReseaux.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	],
        	[
        		'titre'=>'Génie Industriel',
        		'image'=>'industriel.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	]
        ];
        DB::table('departements')->insert($departements);
    }
}
