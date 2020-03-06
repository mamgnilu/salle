<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'activites';

    /**
     * Run the migrations.
     * @table activites
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->char('uuid', 36)->nullable();
            $table->string('libelle')->nullable();
            $table->text('description')->nullable();
            $table->string('nom')->nullable();
            $table->double('montant')->nullable();
            $table->double('avance')->nullable();
            $table->dateTime('datedebut')->nullable();
            $table->dateTime('datefin')->nullable();
            $table->unsignedBigInteger('moniteurs_id');

            $table->index(["moniteurs_id"], 'fk_activites_moniteurs1_idx');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('moniteurs_id', 'fk_activites_moniteurs1_idx')
                ->references('id')->on('moniteurs')
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
