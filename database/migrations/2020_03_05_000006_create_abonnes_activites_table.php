<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbonnesActivitesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'abonnes_activites';

    /**
     * Run the migrations.
     * @table abonnes_activites
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('abonnes_id');
            $table->unsignedBigInteger('activites_id');

            $table->index(["activites_id"], 'fk_abonnes_has_activites_activites1_idx');

            $table->index(["abonnes_id"], 'fk_abonnes_has_activites_abonnes1_idx');


            $table->foreign('abonnes_id', 'fk_abonnes_has_activites_abonnes1_idx')
                ->references('id')->on('abonnes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('activites_id', 'fk_abonnes_has_activites_activites1_idx')
                ->references('id')->on('activites')
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
