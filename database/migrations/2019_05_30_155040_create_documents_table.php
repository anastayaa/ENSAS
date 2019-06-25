<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('emploi_id')->nullable();
            $table->unsignedInteger('slide_id')->nullable();
            $table->string('titre');
            $table->string('description');
            $table->string('doc');
            $table->timestamps();
        });

        Schema::table('documents', function ($table) {
            DB::statement('ALTER TABLE documents MODIFY COLUMN description VARCHAR(1000)');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
