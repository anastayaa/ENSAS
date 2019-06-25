<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides=[
            [
        		'titre'=>" ",
        		'sous-titre'=>" ",
        		'image'=>'robotique.jpg',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>" ",
        		'sous-titre'=>" ",
        		'image'=>'Masen.jpg',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>"Résultats du concours d'accès (Liste Principale)",
        		'sous-titre'=>"Année Universitaire, 2018-2019",
        		'image'=>'ENSA-Concours.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>" ",
        		'sous-titre'=>" ",
        		'image'=>'JD-ENSAS.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>"Céremonie de remise des diplômes de la 11ème promo le 28 Juillet",
        		'sous-titre'=>"Promotions 2017-2018",
        		'image'=>'ceremonie2018.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>"Formations continues de l'ENSA Safi",
        		'sous-titre'=>"Année Universitaire, 2018-2019",
        		'image'=>'Capture.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
        		'titre'=>"L'ENSA Safi participe à la compétition automobile organisée par Shell",
        		'sous-titre'=>"EMEC Team représente L’ENSA-SAFI à L’ECO MARATHON - SHELLLONDRES.",
        		'image'=>'ensas-car.png',
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ]            
            
        ];
        DB::table('slides')->insert($slides);
    }
}
