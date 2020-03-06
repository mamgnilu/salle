<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvalutionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'evalutions';

    /**
     * Run the migrations.
     * @table evalutions
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36)->nullable();
            $table->double('tension_systolique')->nullable();
            $table->double('tension_diastolique')->nullable();
            $table->integer('rythme_cardiaque')->nullable();
            $table->string('poids')->nullable();
            $table->string('etat_tension')->nullable();
            $table->string('taille')->nullable();
            $table->unsignedBigInteger('abonnes_id');

            $table->index(["abonnes_id"], 'fk_evalutions_abonnes1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('abonnes_id', 'fk_evalutions_abonnes1_idx')
                ->references('id')->on('abonnes')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
