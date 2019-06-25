<?php

use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $documents=[
        	[
        		'titre'=>'Génie Informatique',
        		'description'=>'emploi du temps pour la Génie Informatique',
        		'doc'=>'emploiInformatique.pdf',
        		'emploi_id'=>1,
                'slide_id'=>null,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	],
        	[
        		'titre'=>'Génie Réseaux et Télécommunications',
        		'description'=>'emploi du temps pour la Génie Réseaux et Télécommunications',
        		'doc'=>'emploiReseaux.pdf',
        		'emploi_id'=>2,
                'slide_id'=>null,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	],
        	[
        		'titre'=>'Génie Industriel',
        		'description'=>'emploi du temps pour la Génie Industriel',
        		'doc'=>'emploiIndustriel.pdf',
        		'emploi_id'=>3,
                'slide_id'=>null,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	],
        	[
        		'titre'=>'Génie Industriel',
        		'description'=>'emploi du temps pour la Génie des Procédés et Matériaux Céramiques',
        		'doc'=>'emploiProcedes.pdf',
        		'emploi_id'=>4,
                'slide_id'=>null,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
        	],
            [
                'titre'=>'Apprendre Android',
                'description'=>'cours sur l\'Android',
                'doc'=>'android.pdf',
                'emploi_id'=>null,
                'slide_id'=>null,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
                'titre'=>'Internet of Things',
                'description'=>'slide sur les objets connectés',
                'doc'=>'internetOfThings.pdf',
                'emploi_id'=>null,
                'slide_id'=>1,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
                'titre'=>"Offre - Recrutement d'un poste contractuel",
                'description'=>"L'Ecole Nationale des Sciences Appliquées de Safi organise un concours pour le recrutement d'un poste contractuel ouvert aux doctorants de l'université Cadi Ayyad.",
                'doc'=>'avis1.pdf',
                'emploi_id'=>null,
                'slide_id'=>1,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
                'titre'=>"Offre - Recrutement d'un professeur assistant",
                'description'=>"L'Ecole Nationale des Sciences Appliquées de Safi organise, le 20/09/2016 un concours pour le recrutement d'un professeur de l'enseignement supérieur assistant en Langue Anglaise.",
                'doc'=>'avis2.pdf',
                'emploi_id'=>null,
                'slide_id'=>1,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ],
            [
                'titre'=>"Offre - Recrutement d'un Professeur de l'Enseignement Supérieur Assistant",
                'description'=>"L'Ecole Polytechnique de Safi (L'Ecole Nationale des Sciences Appliquées de Safi) organise, le 25/11/2016 un concours pour le recrutement d'un Professeur de l'Enseignement Supérieur Assistant en : RESEAUX TELECOMMUNTCATIONS ou INFORMATIeUE (01poste).",
                'doc'=>'avis3.pdf',
                'emploi_id'=>null,
                'slide_id'=>1,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s")
            ]
        ];
        DB::table('documents')->insert($documents);
    }
}
